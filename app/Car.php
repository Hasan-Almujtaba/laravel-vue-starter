<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'thumbnail_image'];

    public function galleries()
    {
        return $this->hasMany('App\CarGallery');
    }

    public function variants()
    {
        return $this->hasMany('App\CarVariant');
    }

    public function details()
    {
        return $this->hasMany('App\CarDetail');
    }

    public function specifications()
    {
        return $this->hasMany('App\CarSpecification');
    }

    public function threeSixties()
    {
        return $this->hasMany('App\CarThreeSixty');
    }

    public function bookingDrives()
    {
        return $this->hasMany('App\BookingDrive');
    }

    public function banners()
    {
        return $this->hasMany('App\Banner');
    }
}
