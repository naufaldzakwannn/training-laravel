<?php

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {

    // Eager Loading Atau N + 1
    // $post = Post::with(['author', 'category'])->latest()->get();
    $post = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => post::all()]);
});

Route::get('/posts/{post:slug}', function (post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // Lazy Eager Loading
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => ' Articles In ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// post::all() = metode dan all =static
