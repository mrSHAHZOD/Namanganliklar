<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'img'  => fake()->name(),
            'title_uz'  => fake()->name(),
            'title_ru'  => fake()->name(),
            'short_content_uz'  => fake()->name(),
            'short_content_ru'  => fake()->name(),
            'data' => fake()->randomNumber(1,true),
        ];
    }
}
