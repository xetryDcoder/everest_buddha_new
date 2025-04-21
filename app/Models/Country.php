<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'top_description',
        'description',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'banner_photo',
        'top_photo_1',
        'top_photo_2',
        'logo',
        'sidebar_photo',
        'bottom_photo_1',
        'bottom_photo_2',
    ];
}
