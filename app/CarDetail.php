<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    protected $fillable = ['title', 'desc', 'image', 'video', 'car_id'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
