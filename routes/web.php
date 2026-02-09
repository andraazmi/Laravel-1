<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\post;
use App\Models\Category;



Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);

});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "indo00000",
        "email" => "indo@gmail.com",
        "image" => "kkn.png"
    ]);
});




Route::get('/posts', function () {

    return view('posts', [
        "title" => "posts",
        "posts" => post::all()
    ]);
});



Route::get('post/{slug}', function ($slug) {


    return view('post', [
        "title" => "single post",
        "post" => Post::find($slug)
    ]);

});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
// posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


// register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);





// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category :$category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts,
//     ]);
// });