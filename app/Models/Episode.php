<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'movie_id',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
