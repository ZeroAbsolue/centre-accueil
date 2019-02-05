<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id','content'];

    public function user(){
        return $this->belongsTo (User::class,'user_id','id');
    }
}
