<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'shelf',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function subcategory()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('categoryCoverImages')
        ->singleFile();
        $this->addMediaCollection('categoryShelfImages')
        ->singleFile();
        $this->addMediaCollection('categoryBgImages')
        ->singleFile();
    }
}
