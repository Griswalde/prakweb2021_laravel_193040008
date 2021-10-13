<?php

namespace App\Models;



class Post
{
     private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Baby Yoda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Accusamus pariatur repellat modi, 
            architecto maxime enim. Nam ex voluptates laborum iure, 
            molestiae, ipsam inventore veniam atque eum numquam similique impedit vel quaerat reprehenderit commodi,
             eligendi vitae sed distinctio. Eaque impedit incidunt nesciunt facilis sapiente. Debitis ipsum quo quis eius, 
             voluptas quaerat?"
        ],
        [
        "tittle" => "Judul Post kedua",
        "slug" => "judul-post-kedua",
        "author" => "Mando",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Accusamus pariatur repellat modi, 
        architecto maxime enim. Nam ex voluptates laborum iure, 
        molestiae, ipsam inventore veniam atque eum numquam similique impedit vel quaerat reprehenderit commodi,
         eligendi vitae sed distinctio. Eaque impedit incidunt nesciunt facilis sapiente. Debitis ipsum quo quis eius, 
         voluptas quaerat?"
        ],
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
         return $posts->firstwhere('slug', $slug);
        }
}
