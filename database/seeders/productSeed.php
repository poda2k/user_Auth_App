<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
use Illuminate\Support\Facades\DB;


class productSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'quantity' => 10,
                'price' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'quantity' => 15,
                'price' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'quantity' => 67,
                'price' => 143,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
