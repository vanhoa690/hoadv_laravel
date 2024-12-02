<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = ["user_id", "comment", "post_id"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id")->select("id", "profile_image", "username", "name");
    }
}
