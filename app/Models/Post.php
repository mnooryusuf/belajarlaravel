<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
