<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project_portfolio_entries';

    protected $fillable = [
        'page_type',
        'location',
        'heading',
        'description_1',
        'description_2',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}