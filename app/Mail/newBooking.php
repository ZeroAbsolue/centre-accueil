<?php

namespace App\Mail;

use App\Model\Reservation;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Faker\Generator as Faker;
class newBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $reservations;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $user,$reservations )
    {
        $this->reservations = $reservations;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from(config('app.email'))
            ->subject('Rapport de reservation sur CAPB')
            ->markdown('Emails.Booking.create');
//        foreach ($this->reservation->reserveable->images as $image){
//            $email->attach(public_path().'/'.$image->url);
//        }
//        return $email;

    }
}
