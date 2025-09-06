<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                    'product_id' => Product::inRandomOrder()->value('id') ?? Product::factory(),
                    'user_id'    => User::inRandomOrder()->value('id') ?? User::factory(),
                    'rating'     => $this->faker->numberBetween(1, 5),
                    'comment'    => $this->faker->sentence(12),
                ];
    }
}
