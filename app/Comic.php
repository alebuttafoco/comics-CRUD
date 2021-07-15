<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['path', 'title', 'description', 'year', 'price', 'vote'];
}
