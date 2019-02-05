<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['videoable_id','videoable_type','url'];

    public function videoable()
    {
        return $this->morphTo();
    }
}
