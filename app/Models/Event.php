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
        'tag',
        'location',
        'date_event',
        'club_id',
        'start_time',
        'end_time',
        'event_category_id'
    ];


    protected $casts = [
        'date_event' => 'datetime:F/d/Y',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected function club(): BelongsTo
    {
        return $this->belongsTo(club::class);
    }

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function represented(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

}
