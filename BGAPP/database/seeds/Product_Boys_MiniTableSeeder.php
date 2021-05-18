<?php

use Illuminate\Database\Seeder;
use App\Product_Boys_Mini;

class Product_Boys_MiniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Boys_Mini::create([
            'name' => 'Broek',
            'slug' => 'Boys_Mini (1)',
            'price' => 16.99,
            'category' => 'Mini',
            'gender' => 'Boys',
            'description' => 'Broek boys mini - beschikbare maten 74 - 80 - 86 - 92',
        ]);

        Product_Boys_Mini::create([
            'name' => 'Hemd mayoral',
            'slug' => 'Boys_Mini (2)',
            'price' => 26.99,
            'category' => 'Mini',
            'gender' => 'Boys',
            'description' => 'Hemd mayoral boys mini - beschikbare maten 74 - 80 - 92',
        ]);

        Product_Boys_Mini::create([
            'name' => 'Broek mayoral',
            'slug' => 'Boys_Mini (3)',
            'price' => 30.99,
            'category' => 'Mini',
            'gender' => 'Boys',
            'description' => 'Broek mayoral boys mini - beschikbare maat 92',
        ]);

        Product_Boys_Mini::create([
            'name' => 'T-Shirt S.Oliver',
            'slug' => 'Boys_Mini (4)',
            'price' => 13.99,
            'category' => 'Mini',
            'gender' => 'Boys',
            'description' => 'T-Shirt S.Oliver boys mini - beschikbare maat 80',
        ]);
    }
}
