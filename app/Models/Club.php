<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'represented_id',
        'user_id',
        'category_id',
        'image'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function representative(): BelongsTo
    {
        return $this->belongsTo(User::class, 'represented_id');
    }
    public function posts(): hasMany
    {
        return $this->hasMany(Post::class);
    }
    public function events(): hasMany
    {
        return $this->hasMany(Event::class);
    }

}
