<?php

namespace App\Models;

use Illuminate\Support\Arr;

use function Pest\Laravel\post;

class Post
{
    public static function all()
    {
        return [
            [
                'id'    => 1,
                'slug' => 'judul-article-1',
                'title' => 'Judul Article 1',
                'author' => 'Naufal Dzakwan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rerum nulla debitis, mollitia atque libero ut! Maxime libero explicabo hic, minima exercitationem, esse numquam, temporibus sit aliquam sint odio eveniet?',
            ],
            [
                'id'    => 2,
                'slug' => 'judul-article-2',
                'title' => 'Judul Article 2',
                'author' => 'Naufal Dzakwan',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit eveniet accusamus odio aut. Laborum voluptates harum nemo saepe dignissimos laudantium vero, maxime, ipsam, nobis molestias tempora nesciunt ipsa assumenda expedita.',
            ]
        ];
    }

    public static function find($slug): array
    {
        // callback
        // return  Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }
        return $post;
    }
}
