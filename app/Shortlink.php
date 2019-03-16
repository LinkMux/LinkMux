<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlink extends Model
{
    protected $fillable = ['source', 'target', 'user_id'];
}
