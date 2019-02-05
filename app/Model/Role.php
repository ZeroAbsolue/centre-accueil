<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['intitule'];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
