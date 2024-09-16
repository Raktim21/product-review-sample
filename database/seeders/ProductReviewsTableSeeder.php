<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductReview::create([
            'product_id' => 1,
            'user_id' => 1,
            'comment' => 'Great product!',
            'rating' => 5,
        ]);

        ProductReview::create([
            'product_id' => 2,
            'user_id' => 1, 
            'comment' => 'Good value for money.',
            'rating' => 4,
        ]);
    }
}
