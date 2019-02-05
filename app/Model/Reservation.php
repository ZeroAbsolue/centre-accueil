<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ["reserveable_type","reserveable_id","state_id","deleted_at","canceled_at","confirmed_at","deleted","validated_at","user_id",'started_at','ended_at'];

    public function reserveable()
    {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo (User::class,'user_id','id');
    }
    public function state(){
        return $this->belongsTo (State::class,'state_id','id');
    }
}
