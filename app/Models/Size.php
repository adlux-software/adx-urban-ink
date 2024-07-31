<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $attributes = [
        'is_active' => 1,
    ];

    protected $fillable = [
        'name',
        'code',
        'is_active',
    ];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
