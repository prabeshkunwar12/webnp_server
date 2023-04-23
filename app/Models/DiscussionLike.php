<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'discussion_post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(DiscussionPost::class, 'discussion_post_id');
    }
}
