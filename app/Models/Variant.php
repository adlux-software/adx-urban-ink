<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $attributes = [
        'stock' => 0,
//        'status' => 1,
        'sort_order' => 0,
    ];

    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'quantity',
        'mrp',
        'selling_price',
        'stock',
        'sku'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Colors::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }


}
