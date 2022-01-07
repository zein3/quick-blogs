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

        Category::create([
            'name' => 'kampus',
            'slug' => 'kampus'
        ]);
        Category::create([
            'name' => 'jurusan',
            'slug' => 'jurusan'
        ]);
        Category::create([
            'name' => 'karir',
            'slug' => 'karir'
        ]);

        foreach(Article::all() as $article) {
            ArticleCategory::factory()->create([
                'article_id' => $article->id
            ]);
        }

        User::create([
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
            'full_name' => 'test al-testing',
            'roles' => 'admin'
        ]);
        User::create([
            'username' => 'manajer',
            'email' => 'manajer@gmail.com',
            'password' => Hash::make('manajer'),
            'full_name' => 'manajer manajerson',
            'roles' => 'manager'
        ]);
    }
}
