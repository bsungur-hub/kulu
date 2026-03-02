<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'image',
        'meta_description',
        'content',
        'url',
        'reading_time',
        'is_published',
    ];
}
