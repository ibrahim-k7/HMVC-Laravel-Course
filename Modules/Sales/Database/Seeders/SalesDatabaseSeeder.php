<?php

namespace Modules\Sales\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('sales')->insert([
            [
                'product_name' => 'Product 1',
                'quantity' => 10,
                'price' => 99.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product 2',
                'quantity' => 5,
                'price' => 49.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product 3',
                'quantity' => 20,
                'price' => 149.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}