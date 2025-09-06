<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name'        => $this->faker->words(2, true),
            'description' => $this->faker->sentence(15),
            'price'       => $this->faker->randomFloat(2, 10, 500),
            'on_sale'     => $this->faker->boolean(),
            'image'       => $this->faker->imageUrl(400, 400, 'products', true),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
        ];
    }
}
