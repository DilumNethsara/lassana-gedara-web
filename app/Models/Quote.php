<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quote';
    
    protected $fillable = [
        'title',
        'name',
        'country_code',
        'contact',
        'email',
        'address',
        'loan',
        'service',
        'additional_details',
        'postal_code',  
        'city',
    ];

    protected $casts = [
        'additional_details' => 'array',
    ];
}
