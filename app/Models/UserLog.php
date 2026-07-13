<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable = [
        'user_id',
        'quote_id',
        'event',
        'changes',
    ];

    protected $casts = [
        'changes' => 'array',
    ];

    /**
     * Get the user that made the update.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the quote that was updated.
     */
    public function quote()
    {
        return $this->belongsTo(Quote::class, 'quote_id');
    }
}
