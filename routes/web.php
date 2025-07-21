<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Yusuf',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, quasi quidem rem,
            aliquid sed quisquam
            earum, sequi velit repellendus dolore corporis ut? Est at cupiditate cumque laboriosam tempore iure dolorum.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla praesentium et
            distinctio dolorem quidem itaque ex ipsum blanditiis, labore possimus eligendi voluptates officiis. Facilis
            quam adipisci tempora suscipit amet modi?'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
