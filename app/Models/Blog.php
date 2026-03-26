<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function getExcerptAttribute() {

        return Str::words(strip_tags($this->content), 80 , '...');
    }
}
