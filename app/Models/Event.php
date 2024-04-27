<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'service',
        'location',
        'date_event',
    ];

    protected $casts = [
        'date_event' => 'date',
    ];

    protected function club(): BelongsTo
    {
        return $this->belongsTo(club::class);
    }

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function reprsented(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
