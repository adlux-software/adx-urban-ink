<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class instagram extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured');
    }
}