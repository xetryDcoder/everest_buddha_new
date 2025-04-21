<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'cover',
        'author',
        'description',
        'end_photo',
        'tags',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    
    protected $casts = [
        'tags' => 'array',
    ];
}
