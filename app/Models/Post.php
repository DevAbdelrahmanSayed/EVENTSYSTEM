<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class
Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'club_id',
        'user_id',
        'status',
        'last_viewed_posts',
        'last_viewed_events'
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];


    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function approvals()
    {
        return $this->morphMany(Approval::class, 'content');
    }
    public function scopeApprovedOrAdmin(Builder $query)
    {
        return $query->where(function ($query) {
            $query->whereHas('approvals', function ($subQuery) {
                $subQuery->where('is_approved', true)
                    ->whereIn('action_type', ['create', 'update']);
            });

            // Additional check for the admin user
            if (Auth::check() && Auth::user()->type === 'sks') {
                $query->orWhere('user_id', Auth::id());
            }
        });
    }}
