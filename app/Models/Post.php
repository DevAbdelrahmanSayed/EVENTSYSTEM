<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'club_id',
        'type',
        'user_id',
        'status'
    ];

    protected function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
