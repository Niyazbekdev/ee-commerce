<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'category_id' => rand(1,4),
            'name' => [
                'kaa' => fake()->sentence(3),
                'en' => fake()->sentence(3),
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'kaa' => fake()->paragraph(5),
                'en' => fake()->paragraph(5),
            ]
        ];
    }
}
