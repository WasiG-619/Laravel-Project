<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
        [
            'title' => $this->faker->unique()->sentence(3),
            'artist' => $this->faker->unique()->name,
            'price' => $this->faker->randomFloat(2, 1, 100),  // 2 decimal places, min value = 1, max value = 100
            'image_path' => 'https://picsum.photos/1200/800', // prefer the picsums randomised image over the faker images
            'product_type_id' => $this->faker->numberBetween(1, 3), // Assigns a random VALID ID to create the factory of products with multiple types

        ];
    }
}
