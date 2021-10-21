<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::create([
        //     'name' =>'Agung Gumelar',
        //     'email' => 'Agunggriswald158@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // User::create([
        //     'name' =>'wijdan',
        //     'email' => 'wijdan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::factory(20)->create();

        User::factory(3)->create();

       Category::create([
           'name' => 'programming',
           'slug' => 'programming'
       ]);

        Category::create([
            'name' =>'Personal',
            'slug' =>'Personal'
        ]);

        Post::factory(20)->create();

        

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 1,
        //     'user_id' =>1

        // ]);
        
        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 1,
        //     'user_id' =>1

        // ]);

        // Post::create([
        //     'title' => 'Judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 2,
        //     'user_id' =>1

        // ]);


        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 2,
        //     'user_id' =>2

        // ]);
    }
}
