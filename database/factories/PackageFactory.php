<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category' => $this->faker->numberBetween(1, 10), 
            'amount' => $this->faker->numberBetween(100, 1000), 
            'destination' => $this->faker->numberBetween(1, 10), 
            'image' => $this->faker->imageUrl(),
            'status' => '1', 
        ];
    }
}
