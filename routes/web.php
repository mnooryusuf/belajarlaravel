<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-atikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Yusuf',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, quasi quidem rem,
            aliquid sed quisquam
            earum, sequi velit repellendus dolore corporis ut? Est at cupiditate cumque laboriosam tempore iure dolorum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-atikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla praesentium et
            distinctio dolorem quidem itaque ex ipsum blanditiis, labore possimus eligendi voluptates officiis. Facilis
            quam adipisci tempora suscipit amet modi?'
        ]
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-atikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Yusuf',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, quasi quidem rem,
            aliquid sed quisquam
            earum, sequi velit repellendus dolore corporis ut? Est at cupiditate cumque laboriosam tempore iure dolorum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-atikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla praesentium et
            distinctio dolorem quidem itaque ex ipsum blanditiis, labore possimus eligendi voluptates officiis. Facilis
            quam adipisci tempora suscipit amet modi?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
