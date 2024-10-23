<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $attributes = [
        'sort_order' => 0,
        'status' => true,
    ];

    protected $fillable = [
        'title',
        'slug',
        'summery',
        'description',
        'sort_order',
        'status',
    ];
    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }
}
