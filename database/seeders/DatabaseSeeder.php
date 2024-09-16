<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('admin@123@'),
        ]);

        $this->call([
            ProductsTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductCategorySeeder::class,
            OrdersTableSeeder::class,
            OrderDetailsTableSeeder::class,
            ProductReviewsTableSeeder::class,
        ]);
    }
}
