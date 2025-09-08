<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model //terhubung ke tabel posts
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
