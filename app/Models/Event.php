<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id', 'represented_id', 'name', 'description',
        'event_category_id', 'child_id', 'tag_id', 'gender','user_id',
        'start_time', 'end_time', 'date_event', 'image',
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
    public function childCategory()
    {
        return $this->belongsTo(EventCategory::class, 'child_id');
    }
    public function tag()
    {
        return $this->belongsTo(tag::class);
    }
    public function approvals()
    {
        return $this->morphMany(Approval::class, 'content');
    }

}
