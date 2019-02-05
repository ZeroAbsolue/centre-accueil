<?php

namespace App\Http\Controllers;

use App\Mail\newBooking;
use App\Model\Reservation;
use App\Model\State;
use App\Notifications\NewReservation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::with (['reserveable','user','state'])->orderBy('started_at','desc')->get();
        return $reservation;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|numeric",
            "elementReserver.*.reserveable_id"=>"required|numeric",
            "elementReserver.*.reserveable_type"=>"required",
            "elementReserver.*.started_at"=>"required",
            "elementReserver.*.ended_at"=>"required"
        ]);

        $user = User::create([
            "name"=>$request->get ('name') ,
            "email"=>$request->get ('email') ,
            "phone"=>$request->get ('phone') ,
        ]);

        $items = $request->get('elementReserver');
        $reservations = array();

        foreach ($items as $item  ){
          $reservation =   Reservation::create([
                'reserveable_id'=>$item['reserveable_id'],
                'reserveable_type'=>$this->getReserveableType ($item['reserveable_type']),
                'started_at'=>Carbon::parse($item['started_at']),
                'ended_at'=>Carbon::parse($item['ended_at']),
                'user_id'=>$user->id
            ]);
            $reservation = $this->show($reservation->id);
            array_push($reservations,$reservation);
            Notification::send(UserController::showAdmin(), new NewReservation($reservation));
        }
        $mail = new newBooking($user,$reservations);
        try{
            $mailErrorMessage = "";
            Mail::to($user->email)
                ->send($mail);
        }catch (\Exception $exception){
            //Plus tard il faut recuperer le code de l'erreur et le traiter mais pour le moment on fait comme ci bas
            dd($exception);
            $mailErrorMessage = "Vérifier votre connexion internet";
        }

        return compact('user','mailErrorMessage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $validation = Validator::make (compact ('id'),[
            'id'=>'exists:reservations,id'
        ]);

        if($validation->fails ()){
            return $validation->errors ();
        }

        $reservation = Reservation::with (['reserveable','user','state'])->find($id);
        return $reservation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $reservation = $request->get('reservation');
        $stateSend = $reservation['state_id'];
        $deleted = $this->updateTimestampsValue ($stateSend,$reservation["deleted_at"],5);
        Reservation::whereId($id)->update(
        [
            "reserveable_type"=>$reservation['reserveable_type'],
            "reserveable_id"=>$reservation['reserveable_id'],
            "state_id"=>$reservation["state_id"],
            "deleted_at"=>$deleted,
            "canceled_at"=>$this->updateTimestampsValue ($stateSend,$reservation["canceled_at"],3),
            "confirmed_at"=>$this->updateTimestampsValue ($stateSend,$reservation["confirmed_at"],4),
            "deleted"=>is_null($deleted) ? $reservation["deleted"]: 1,
            "validated_at"=>$this->updateTimestampsValue ($stateSend,$reservation["validated_at"],2),
            "user_id"=>$reservation["user_id"]
        ]);
        $reservation = $this->show ($id);

        return $reservation ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getReserveableType($element){
        if( str_contains($element,'SALLE') )
            return "Salle";

        return "Chambre";
    }

    public function newReservation($items,$user){
        foreach ($items as $item  ){
            Reservation::create([
                'reserveable_id'=>$item['reserveable_id'],
                'reserveable_type'=>$this->getReserveableType ($item['reserveable_type']),
                'started_at'=>Carbon::parse($item['started_at']),
                'ended_at'=>Carbon::parse($item['ended_at']),
                'user_id'=>$user->id
            ]);
        }
    }

    public function updateTimestampsValue($stateSend,$value,$stateOnDB){
        if(is_null ($value)){
            if($stateSend == $stateOnDB){
                return Carbon::now ();
            }
            return null;
        }
        return $value;
    }

}
