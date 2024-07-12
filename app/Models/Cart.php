<?php

namespace App\Models\Finance;

use App\Models\Auth\User;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Cart extends Model
{
    use SoftDeletes,
        Actionable;

    protected $fillable = [
        'user_id',
        'session_id',
        'total',
    ];

    protected $with = ['variants']; // Ensure 'variants' relation is eager loaded

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Variant::class)
            ->withPivot([
                'price',
                'quantity',
            ]);
    }
}
