<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarThreeSixty extends Model
{
    protected $fillable = ['path', 'car_id'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
