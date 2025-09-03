<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id'    => 1,
            'title' => 'Judul Article 1',
            'author' => 'Naufal Dzakwan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rerum nulla debitis, mollitia atque libero ut! Maxime libero explicabo hic, minima exercitationem, esse numquam, temporibus sit aliquam sint odio eveniet?',
        ],
        [
            'id'    => 2,
            'title' => 'Judul Article 2',
            'author' => 'Naufal Dzakwan',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit eveniet accusamus odio aut. Laborum voluptates harum nemo saepe dignissimos laudantium vero, maxime, ipsam, nobis molestias tempora nesciunt ipsa assumenda expedita.',
        ]
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id'    => 1,
            'title' => 'Judul Article 1',
            'author' => 'Naufal Dzakwan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rerum nulla debitis, mollitia atque libero ut! Maxime libero explicabo hic, minima exercitationem, esse numquam, temporibus sit aliquam sint odio eveniet?',
        ],
        [
            'id'    => 2,
            'title' => 'Judul Article 2',
            'author' => 'Naufal Dzakwan',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit eveniet accusamus odio aut. Laborum voluptates harum nemo saepe dignissimos laudantium vero, maxime, ipsam, nobis molestias tempora nesciunt ipsa assumenda expedita.',
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
