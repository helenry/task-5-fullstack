<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.articles.index", [
            "title" => "My Articles",
            "articles" => Article::where("user_id", auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        return view("dashboard.articles.create", [
            "title" => "Create New Article",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "slug" => "required|unique:articles",
            "category_id" => "required",
            "content" => "required"
        ]);

        $validatedData["user_id"] = auth()->user()->id;
        $validatedData["excerpt"] = Str::limit(strip_tags($request->body), 200);

        Article::create($validatedData);
        return redirect("/dashboard/articles")->with("success", "Article created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        return view("dashboard.articles.show", [
            "title" => $article->title,
            "article" => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        return view("dashboard.articles.edit", [
            "title" => "Edit Article",
            "article" => $article,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            "title" => "required|max:255",
            "category_id" => "required",
            "content" => "required"
        ];

        if($request->slug != $article->slug) {
            $rules["slug"] = "required|unique:articles";
        }

        $validatedData = $request->validate($rules);

        $validatedData["user_id"] = auth()->user()->id;
        $validatedData["excerpt"] = Str::limit(strip_tags($request->body), 200);

        Article::where("id", $article->id)->update($validatedData);
        return redirect("/dashboard/articles")->with("success", "Article updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect("/dashboard/articles")->with("success", "Article deleted successfully");
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Article::class, "slug", $request->title);
        return response()->json(["slug" => $slug]);
    }
}
