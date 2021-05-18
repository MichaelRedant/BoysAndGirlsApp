<?php

use Illuminate\Database\Seeder;
use App\Product_Girls_Mini;

class Product_Girls_MiniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Girls_Mini::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Mini (1)',
            'price' => 25.99,
            'category' => 'Mini',
            'gender' => 'Girls',
            'description' => 'Kleed Mini Girl - beschikbare maten 74 - 80 - 86',
        ]);

        Product_Girls_Mini::create([
            'name' => 'Salopette mayoral',
            'slug' => 'Girls_Mini (2)',
            'price' => 39.50,
            'category' => 'Mini',
            'gender' => 'Girls',
            'description' => 'Salopette mayoral Mini Girl - beschikbare maten 74 - 80 - 86',
        ]);

        Product_Girls_Mini::create([
            'name' => 'Salopette',
            'slug' => 'Girls_Mini (3)',
            'price' => 29.99,
            'category' => 'Mini',
            'gender' => 'Girls',
            'description' => 'Salopette Mini Girl - beschikbare maten 74 - 80 - 86 - 92',
        ]);

        Product_Girls_Mini::create([
            'name' => 'Kleed Levis',
            'slug' => 'Girls_Mini (4)',
            'price' => 40.00,
            'category' => 'Mini',
            'gender' => 'Girls',
            'description' => 'Kleed Levis Mini Girl - beschikbare maten 74 - 80 - 98',
        ]);

        Product_Girls_Mini::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Mini (5)',
            'price' => 29.99,
            'category' => 'Mini',
            'gender' => 'Girls',
            'description' => 'Kleed Mini Girl - beschikbare maten 74 - 80 - 86 - 92',
        ]);
    }
}
