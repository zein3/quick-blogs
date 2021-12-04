<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Create Users
        $user1 = User::create([
            'username' => 'joseph',
            'email' => 'josephjoestar@speedwagon.com',
            'password' => Hash::make('joestar123'),
            'full_name' => 'Joseph Joestar',
            'roles' => 'admin',
        ]);



        // Create categories
        $category1 = Category::create([
            'name' => 'test1',
            'slug' => 'test1'
        ]);
        $category2 = Category::create([
            'name' => 'test2',
            'slug' => 'test2'
        ]);



        // Create articles
        $article1 = Article::create([
            'author_id' => $user1->id,
            'title' => 'How to defeat a gay vampire',
            'slug' => 'howtodefeatagayvampire',
            'thumbnail' => 'https://wallpapercave.com/wp/wp5706047.png',
            'body' => 'Get star platinum',
            'approved' => true
        ]);



        // Assign article to category
        ArticleCategory::create([
            'article_id' => $article1->id,
            'category_id' => $category1->id
        ]);
        ArticleCategory::create([
            'article_id' => $article1->id,
            'category_id' => $category2->id
        ]);

    }
}
