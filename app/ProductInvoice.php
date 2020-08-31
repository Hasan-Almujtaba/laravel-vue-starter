<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInvoice extends Model
{
    protected $fillable = [
        'name',
        'no_telp',
        'address',
        'invoice_code',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
