<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Article::truncate();
        Category::truncate();
        ArticleCategory::truncate();
        Comment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        Article::factory(20)->create();
        Category::factory(5)->create();

        foreach(Article::all() as $article) {
            ArticleCategory::factory()->create([
                'article_id' => $article->id
            ]);
        }
    }
}
