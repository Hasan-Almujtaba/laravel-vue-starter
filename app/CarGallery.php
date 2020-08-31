<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarGallery extends Model
{
    protected $fillable = ['type', 'image', 'car_id'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
