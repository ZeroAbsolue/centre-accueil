<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name','description','area'];

    /**
     * Fonction eloquent permettant de recuperer la liste des images d'une chambre
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
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
