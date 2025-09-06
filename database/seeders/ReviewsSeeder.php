<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    public function run(): void
    {
     
        if (User::count() === 0) {
            \App\Models\User::factory(5)->create();
        }

        if (Product::count() === 0) {
            \App\Models\Product::factory(10)->create();
        }

  
        Review::factory(50)->create();
    
    }
}
