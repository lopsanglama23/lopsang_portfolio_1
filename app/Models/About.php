<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'email',
        'phone',
        'location',
        'profile_image',
        'summary',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}
