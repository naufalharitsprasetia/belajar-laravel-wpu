<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet, Reprehenderit a similique autem omnis ipsa culpa quam perferendis. Earum nostrum, vitae placeat quos unde amet, repudiandae commodi quasi beatae ipsa blanditiis."
        ],
        [
            "title" => "Judul Post Sandhika",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit a similique autem omnis ipsa culpa quam perferendis. Earum nostrum, vitae placeat quos unde amet, repudiandae commodi quasi beatae ipsa blanditiis."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Erick",
            "body" => "Lorem ipsum, consectetur adipisicing elit. Reprehenderit a similique autem omnis ipsa culpa quam perferendis. Earum nostrum, vitae placeat quos unde amet, repudiandae commodi quasi beatae ipsa blanditiis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}