<?php

use App\Product_Girls_Baby;
use Illuminate\Database\Seeder;

class Product_Girls_BabyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Girls_Baby::create([
            'name' => 'Kleed Levis',
            'slug' => 'Girls_Baby (1)',
            'price' => 40.00,
            'category' => 'Baby',
            'gender' => 'Girls',
            'description' => 'Kleed Levis Baby Girl - beschikbare maat 68',
        ]);

        Product_Girls_Baby::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Baby (2)',
            'price' => 25.99,
            'category' => 'Baby',
            'gender' => 'Girls',
            'description' => 'Kleed Baby Girl - beschikbare maten 56 - 62 - 68',
        ]);
    }
}
