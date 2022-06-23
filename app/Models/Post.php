<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'cover_image']; //uno slug è il titolo del post ovvero un comando che modifica il titolo Learn php in learn-php
}
