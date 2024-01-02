<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;


class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable =[
        'name',
        'slug',
        'category_id',
        'shelf',
        'featured',
        'summary',
        'feature_shelf',
        'feature_position'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function pages(){
        return $this->hasMany(Page::class);
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
    // public function summary(){
    //     return $this->hasOne(Summary::class);
    // }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('bookCoverImages')
        ->singleFile();
        $this->addMediaCollection('bookShelfImages')->singleFile();
    }
}
