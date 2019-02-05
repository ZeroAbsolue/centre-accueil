<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Notifications\Message\NewMessage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            "message"=>"required"
        ]);

        $user = User::create([
            "name"=>$request->get ('name') ,
            "email"=>$request->get ('email') ,
            "phone"=>$request->get ('phone') ,
        ]);

        $messageCreate =  Message::create([
            "content"=>$request->get ('message'),
            "user_id"=>$user->id
        ]);

        $message = Message::with('user')->find($messageCreate->id);

        Notification::send(UserController::showAdmin(), new NewMessage($message));

        $mailErrorMessage = "";
        $adminMail = new \App\Mail\Message\newMessage($message);
        $userMail = new \App\Mail\Message\Client\newMessage($message);

        try{
            Mail::to($user->email)
                ->send($userMail);
        }catch (\Exception $exception){
            //Plus tard il faut recuperer le code de l'erreur et le traiter mais pour le moment on fait comme ci bas
            $mailErrorMessage = "Vérifier votre connexion internet";
        }

        foreach (UserController::showAdmin() as $user)
        {
            try{
                Mail::to($user->email)
                    ->send($adminMail);
            }catch (\Exception $exception){
                //Plus tard il faut recuperer le code de l'erreur et le traiter mais pour le moment on fait comme ci bas
                $mailErrorMessage = "Vérifier votre connexion internet";
            }

        }



        return compact('message','mailErrorMessage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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

}
