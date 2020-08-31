<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'price', 
        'year', 
        'fuel', 
        'license_plate', 
        'exterior', 
        'interior', 
        'name', 
        'speed',
        'mode',
        'place',   
        'dealer',
    ];

}
