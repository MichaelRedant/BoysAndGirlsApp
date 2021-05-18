<?php

use App\Product_Boys_Baby;
use Illuminate\Database\Seeder;

class Product_Boys_BabyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Boys_Baby::create([
            'name' => 'Set Hemdje & Salopette',
            'slug' => 'Boys_Baby (1)',
            'price' => 53.99,
            'category' => 'Baby',
            'gender' => 'Boys',
            'description' => 'Set Hemdje & Salopette Baby Boys - beschikbare maten 56 - 62 - 68',
        ]);

        Product_Boys_Baby::create([
            'name' => 'T-shirt',
            'slug' => 'Boys_Baby (2)',
            'price' => 17.99,
            'category' => 'Baby',
            'gender' => 'Boys',
            'description' => 'T-shirt Baby Boys - beschikbare maten 56 - 62 - 68',
        ]);
    }
}
