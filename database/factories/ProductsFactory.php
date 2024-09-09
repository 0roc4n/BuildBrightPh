<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Products;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => strtoupper($this->faker->unique()->lexify('???-????')),
            'product_name' => $this->faker->word(),
            'category_id' => ProductCategory::inRandomOrder()->first()->id, // Get a random category
            'product_brand' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 100, 10000), // Random price between 100 and 10,000
            'stocks' => $this->faker->numberBetween(1, 100), // Random stock number between 1 and 100
            'is_displayed' => $this->faker->boolean(), // Random boolean
            'is_available' => $this->faker->boolean(), // Random boolean
            'img_path' => $this->faker->imageUrl(640, 480, 'products', true), // Random product image URL
        ];
    }
}
