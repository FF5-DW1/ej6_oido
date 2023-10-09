<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        "snippet_id",
        "user_id",
        "comment",
        "status"
    ];

    /**
     * Get the user that owns the phone.
     */
    public function snippet(): BelongsTo
    {
        return $this->belongsTo(Snippet::class, 'snippet_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
