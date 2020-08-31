<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarVariant extends Model
{
    protected $fillable = ['color', 'image', 'car_id'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
