<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'grand_total' => 250.00,
            'shipping_cost' => 20.00,
            'discount' => 10.00,
            'user_id' => 1, // Assuming user 1 exists
        ]);
    }
}
