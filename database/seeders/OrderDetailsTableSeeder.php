<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderDetail::create([
            'product_id' => 1,
            'order_id' => 1,
            'unit_price' => 100.00,
            'quantity' => 2,
        ]);

        OrderDetail::create([
            'product_id' => 2,
            'order_id' => 1,
            'unit_price' => 150.00,
            'quantity' => 1,
        ]);
    }
}
