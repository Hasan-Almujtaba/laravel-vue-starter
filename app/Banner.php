<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'car_id',
        'image'
    ];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
