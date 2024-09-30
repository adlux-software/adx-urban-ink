<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CartProduct extends Model
{
    protected $table = 'cart_product';

    protected $fillable = [
        'cart_id',
        'variant_id', // Added variant_id
        'product_id',
        'price',
        'quantity',
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id');
    }
}
