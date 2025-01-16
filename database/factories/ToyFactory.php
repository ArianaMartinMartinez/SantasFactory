<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'photo' => $this->faker->imageUrl(640, 640, 'toys'),
            'description' => $this->faker->text(350),
            'age_range' => $this->faker->randomElement(['0-3', '3-7', '7-12', '12-16', '16-18', '+18', '+99'])
        ];
    }
}
