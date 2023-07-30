<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'  => fake()->randomNumber(3,true),
            'title_uz' => fake()->lexify(),
            'title_ru' => fake()->lexify(),
            'img' => fake()->shuffle(),
            'body_uz' => fake()->shuffle(),
            'body_ru' => fake()->shuffle(),
            'views' => fake()->shuffle(),
        ];
    }
}
