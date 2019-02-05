<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['type','name','area','description','sitting_place'];


    /**
     * Fonction eloquent permettant de recuperer la liste des images d'une salle
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */

    public function images()
    {
        return $this->morphMany('App\Model\Image', 'imageable');
    }

    public function videos()
    {
        return $this->morphMany('App\Model\Video', 'videoable');
    }

    public function reservations()
    {
        return $this->morphMany('App\Model\Reservation', 'reserveable');
    }

}
