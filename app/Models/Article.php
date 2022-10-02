<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = [
    //     "title",
    //     "slug",
    //     "excerpt",
    //     "content"
    // ];
    protected $guarded = [
        "id"
    ];
    protected $with = [
        "category",
        "user"
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters["search"] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where("title", "like", "%" . $search . "%")->orWhere("content", "like", "%" . $search . "%");
            });
        });

        $query->when($filters["category"] ?? false, function($query, $category) {
            return $query->whereHas("category", function($query) use ($category) {
                $query->where("slug", $category);
            });
        });

        $query->when($filters["user"] ?? false, function($query, $user) {
            return $query->whereHas("user", function($query) use ($user) {
                $query->where("username", $user);
            });
        });
    }

    public function getRouteKeyName() {
        return "slug";
    }

    public function sluggable(): array {
        return [
            "slug" => [
                "source" => "title"
            ]
        ];
    }
}
