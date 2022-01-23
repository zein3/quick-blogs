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


        //Article::factory(20)->create();

        $kampus = Category::create([
            'name' => 'kampus',
            'slug' => 'kampus'
        ]);
        $jurusan = Category::create([
            'name' => 'jurusan',
            'slug' => 'jurusan'
        ]);
        $karir = Category::create([
            'name' => 'karir',
            'slug' => 'karir'
        ]);

        $ui = Article::factory()->create([
            'title' => 'Universitas Indonesia'
        ]);
        $nurulfikri = Article::factory()->create([
            'title' => 'STT Terpadu Nurul Fikri'
        ]);
        $stis = Article::factory()->create([
            'title' => 'Politeknik Statistika STIS'
        ]);
        $itb = Article::factory()->create([
            'title' => 'Institut Pertanian Bogor'
        ]);
        $hubinter = Article::factory()->create([
            'title' => 'Hubungan Internasional'
        ]);
        $ilmuadmin = Article::factory()->create([
            'title' => 'Ilmu Administrasi'
        ]);
        $ekon = Article::factory()->create([
            'title' => 'Ekonomi Syariah'
        ]);
        $bisnis = Article::factory()->create([
            'title' => 'Bisnis Digital'
        ]);

        ArticleCategory::create([
            'article_id' => $ui->id,
            'category_id' => $kampus->id
        ]);
        ArticleCategory::create([
            'article_id' => $nurulfikri->id,
            'category_id' => $kampus->id
        ]);
        ArticleCategory::create([
            'article_id' => $stis->id,
            'category_id' => $kampus->id
        ]);
        ArticleCategory::create([
            'article_id' => $itb->id,
            'category_id' => $kampus->id
        ]);

        ArticleCategory::create([
            'article_id' => $hubinter->id,
            'category_id' => $jurusan->id
        ]);
        ArticleCategory::create([
            'article_id' => $ilmuadmin->id,
            'category_id' => $jurusan->id
        ]);
        ArticleCategory::create([
            'article_id' => $ekon->id,
            'category_id' => $jurusan->id
        ]);
        ArticleCategory::create([
            'article_id' => $bisnis->id,
            'category_id' => $jurusan->id
        ]);


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
