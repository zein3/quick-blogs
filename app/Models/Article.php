<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_categories');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function excerpt()
    {
        return Str::limit($this->body, 100);
    }

    public function comments()
    {
        // TODO
    }

    public function scopePublished($query)
    {
        return $query->where('approved', true)->orderBy('published_at', 'desc');
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false)
        {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }

        if ($filters['category'] ?? false)
        {
            $query->whereHas('categories', function($query)use($filters) {
                $query->where('slug', $filters['category']);
            });
        }

        if ($filters['author'] ?? false)
        {
            $query->whereHas('author', function($query)use($filters) {
                $query->where('username', $filters['author']);
            });
        }
    }
}
