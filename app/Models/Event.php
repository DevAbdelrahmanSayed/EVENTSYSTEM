<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
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
        'user_id',
        'represented_id',
        'event_category_id',
        'place',
        'location'
    ];


    protected $casts = [
        'date_event' => 'datetime:F/d/Y',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function represented(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }
    public function approvals()
    {
        return $this->morphMany(Approval::class, 'content');
    }

}
