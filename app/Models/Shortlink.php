<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shortlink extends Model
{
    protected $fillable = ['hash', 'original_url', 'user_id'];
    protected $appends = ['full_short_url'];

    protected function getFullShortUrlAttribute()
    {
        return url($this->hash);
    }
}
