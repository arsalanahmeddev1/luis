<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'pagenumber',

    ];
    // public function getRouteKeyName()
    // {
    //     return 'pagenumber';
    // }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }


}
