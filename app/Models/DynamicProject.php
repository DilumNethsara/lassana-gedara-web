<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamicProject extends Model
{
    protected $table = 'dynamic_projects';

    protected $fillable = [
        'project_id',
        'location',
        'heading',
        'description_1',
        'description_2',
        'page_type',
        'image_folder',
        'image_prefix',
        'autoplay_speed',
        'images',
        'layout',
    ];

    protected $casts = [
        'autoplay_speed' => 'integer',
        'images'         => 'array',   // JSON column — filenames array ලෙස store
    ];
}