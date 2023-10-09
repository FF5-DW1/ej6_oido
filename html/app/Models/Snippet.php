<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Snippet extends Model
{
    use HasFactory;
    protected $fillable = [
        "uuid",
        "user_id",
        "content",
        "status",
        "likes",
        "comments"
    ];

/**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    /**
     * Get the comments for the blog post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function likes(): HasMany
    {
        return $this->hasMany(Likes::class);
    }

    
}
