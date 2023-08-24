<?php

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "ad

web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/posts', [ArticleController::class, 'index']);


// single page post
Route::get('/posts/{post:slug}', [ArticleController::class, 'show']);


Route::get('/categories', function(Category $category){
    return view('categories',[
        'title' => "Article Category",
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by Category: $category->categoryName",
        'posts' => $category->posts,
    ]);
});

Route::get('/author/{author}', function(User $user){
    return view('posts',[
        'title' => "Post By Author: $user->name",
        'posts' => $user->posts,
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); //actually the name of function is up to us but i followed the documentation examplee

Route::get('/regist', [RegistController::class, 'index'])->middleware();
Route::post('/regist', [RegistController::class, 'store']);

Route::get('/mypost', function(){
    return view('/mypost', [
        "title" => "mypost"
    ]);
})->middleware('auth');//middleware will know that it is guest or an authenticated user, and brings user to login page instead of user post page if not authenticated


Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/mypost', [ArticleController::class, 'showmine']);


Route::get('/create', function () {
    return view('/create', [
        "title" => "create",
        'categories' => Category::all(),
        'tags' => Tag::all()
    ]);
});

Route::post('/create', [ArticleController::class, 'store']);
Route::delete('/mypost/{id}', [ArticleController::class, 'destroy']);
Route::get('/mypost/{post:id}/edit', [ArticleController::class, 'edit']);
Route::put('/mypost/{post:id}', [ArticleController::class, 'update']);
