<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentences(2, true);
        return [
            'author_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'thumbnail' => 'https://loremflickr.com/730/300/',
            'body' => $this->faker->paragraph(),
            'approved' => true,
            'published_at' => now()
        ];
    }
}
