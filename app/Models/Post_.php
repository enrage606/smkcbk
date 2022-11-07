<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Andi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia debitis illum ducimus, dolorum necessitatibus adipisci labore harum quod sapiente doloremque nobis ad, rem obcaecati quo quia voluptas ab recusandae asperiores."
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Ando",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia debitis illum ducimus, dolorum necessitatibus adipisci labore harum quod sapiente doloremque nobis ad, rem obcaecati quo quia voluptas ab recusandae asperiores."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
