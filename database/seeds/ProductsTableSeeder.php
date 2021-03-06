<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Laptop1',
            'price' => '999',
            'description' => str_random(50),
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop2',
            'price' => '1999',
            'description' => str_random(50),
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop3',
            'price' => '2999',
            'description' => str_random(50),
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop4',
            'price' => '3999',
            'description' => str_random(50),
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop5',
            'price' => '4999',
            'description' => str_random(50),
        ]);
    }
}
