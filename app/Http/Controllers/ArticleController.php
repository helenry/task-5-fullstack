<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleController extends Controller
{
    public function index() {
        $title = "";
        if(request("category")) {
            $category = Category::firstWhere("slug", request("category"));
            $title = $category->name;
        }
        if(request("user")) {
            $user = User::firstWhere("username", request("user"));
            $title = $user->name . "'s";
        }
        return view('articles', [
            "title" => $title . " Articles",
            "articles" => Article::latest()->filter(request(["search", "category", "user"]))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Article $article) {  // route model binding
        return view("article", [
            "title" => $article->title,
            "article" => $article
        ]);
    }
}
