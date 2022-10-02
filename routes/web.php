<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Simple Blog with Laravel"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Helen Ruth Yemima",
        "email" => "hryemima@gmail.com",
        "image" => "hryemima@gmailcom.jpg"
    ]);
});

Route::get('/articles', [ArticleController::class, "index"]);

// single post
Route::get("articles/{article:slug}", [ArticleController::class, "show"]);

Route::get("/categories", function() {
    return view("categories", [
        "title" => "Categories",
        "categories" => Category::all()
    ]);
});

// Route::get("categories/{category:slug}", function(Category $category) {
//     return view("articles", [
//         "title" => $category->name . " Articles",
//         "articles" => $category->articles->load("category", "user")
//     ]);
// });

// Route::get("users/{user:username}", function(User $user) {
//     return view("articles", [
//         "title" => $user->name . "'s Articles",
//         "articles" => $user->articles->load("category", "user")
//     ]);
// });

Route::get("/login", [LogInController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LogInController::class, "authenticate"]);
Route::post("/logout", [LogInController::class, "logout"]);

Route::get("/signup", [SignUpController::class, "index"])->middleware("guest");
Route::post("/signup", [SignUpController::class, "store"]);

Route::get("/dashboard", function() {
    return view("dashboard.index", [
        "title" => "Dashboard"
    ]);
})->middleware("auth");

Route::get("/dashboard/articles/checkSlug", [DashboardArticleController::class, "checkSlug"])->middleware("auth");
Route::resource("/dashboard/articles", DashboardArticleController::class)->middleware("auth");