<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'city',
        'zip',
        'total',
        'payment_mode',
        'payment_id',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }


    private function generatePaymentId()
    {
        return 'PAY-' . Str::upper(Str::random(10));
    }

}
