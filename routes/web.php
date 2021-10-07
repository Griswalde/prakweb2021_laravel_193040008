<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]) ;
});


Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Baby Yoda",
        "email" => "agunggriswald158@gmail.com",
        "image" => "yoda.jpg"
    ]) ;
});



Route::get('/blog', function(){
    $blog_posts = [
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
        
    
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});



// halaman single

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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


        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    
    return view('post',[
        "tittle" =>"Single Post",
        "post" => $new_post
    ]);
});




