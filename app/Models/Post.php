<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Post extends Model
{
    use HasFactory;
    use Favoriteable;
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'subcategory_id',
        'views',
        'likes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
