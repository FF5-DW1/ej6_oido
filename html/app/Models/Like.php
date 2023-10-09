<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Like extends Model
{
    use HasFactory;
    protected $fillable=[
        "snippet_id",
        "user_id"
    ];

    /**
     * Get the snippet that owns the like.
     */
    public function snippet(): BelongsTo
    {
        return $this->belongsTo(User::class, 'snippet_id');
    }

    /**
     * Get the like that owns the user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
