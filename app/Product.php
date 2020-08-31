<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'desc', 
        'image', 
        'price', 
        'product_category_id', 
    ];

    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function productInvoices()
    {
        return $this->hasMany('App\ProductInvoice');
    }
}
