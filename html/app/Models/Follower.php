<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Follower extends Model
{
    use HasFactory;
    protected $fillable=[
        "follower_id",
        "following_id"
    ];

    /**
     * Get the followers for the user.
     */
    public function user(): HasMany
    {
        return $this->hasMany(Follower::class);
    }

}
