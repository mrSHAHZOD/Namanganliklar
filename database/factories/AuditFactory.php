<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'event'=> fake() -> lexify(),
            'tablename' => fake() -> name(),
            'username' => fake() -> name(),
            'data' => fake() -> lexify(),
        ];
    }
}
