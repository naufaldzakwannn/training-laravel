<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model //terhubung ke tabel posts
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    protected $with = ['author', 'category'];

    public $timestamps = true; // default-nya true, pastikan tidak false

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
