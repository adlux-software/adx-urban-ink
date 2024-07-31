<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Cart extends Model
{
    use Actionable,
        SoftDeletes;

    protected $fillable = [
        'user_id',
        'session_id',
        'is_paid',
        'total',
    ];

    protected $with = ['variants']; // Ensure 'variants' relation is eager loaded

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class, 'cart_product')
            ->withPivot([
                'cart_id',
                'variant_id',
                'price',
                'quantity',
                'price',

            ]);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')
            ->withPivot([
                'id',
                'cart_id',
                'variant_id',
                'price',
                'quantity',
                'price',
            ]);
    }

    public static function totalProductCount()
    {
        $session_id = session()->get('cart_session_id', null);

        //number of product in cart_iem table
        return Cart::where('session_id', $session_id)->first()->products->count();
    }


}
