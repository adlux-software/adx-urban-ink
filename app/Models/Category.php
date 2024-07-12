<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $attributes = [
        'is_active' => 1
    ];

    protected $fillable = [
        'name',
        'slug',
        'is_active',
    ];

    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('Category')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('Category')
            ->width(100)
            ->height(100);
    }
}
