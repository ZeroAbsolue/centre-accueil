<?php

namespace App;

use App\Model\Reservation;
use App\Model\Role;
use App\Models\Message;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reservations(){
        return $this->hasMany (Reservation::class,'user_id','id');
    }
    public function messages(){
        return $this->hasMany (Message::class,'user_id','id');
    }
    public function roles(){
        return $this->belongsToMany('App\Model\Role')->withTimestamps();
    }
}
