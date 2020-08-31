<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarSpecification extends Model
{
    protected $fillable = ['desc', 'engine', 'rate_output', 'rate_tongue', 'car_id'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
