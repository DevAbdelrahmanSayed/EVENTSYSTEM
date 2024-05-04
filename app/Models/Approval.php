<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{

    protected $fillable = ['content_type', 'content_id', 'user_id', 'action_type', 'is_approved', 'admin_id','reason'];


    public function content()
    {
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

}
