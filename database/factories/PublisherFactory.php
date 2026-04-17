<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'         => $this->faker->unique()->company(),
            'headquarters' => $this->faker->city() . ', ' . $this->faker->country(),
            'is_active'    => true,
        ];
    }
}