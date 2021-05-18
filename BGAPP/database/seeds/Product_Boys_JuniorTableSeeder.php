<?php

use Illuminate\Database\Seeder;
use App\Product_Boys_Junior;

class Product_Boys_JuniorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Boys_Junior::create([
            'name' => 'Gilet',
            'slug' => 'gilet183136420',
            'price' => 46.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 'Gilet Boys Junior',
        ]);

        Product_Boys_Junior::create([
            'name' => 'Short',
            'slug' => 'short183111082',
            'price' => 30.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 'Short Boys Junior',
        ]);

        Product_Boys_Junior::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt182371702',
            'price' => 17.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 't-shirt Boys Junior',
        ]);

        Product_Boys_Junior::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt183216188',
            'price' => 19.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 't-shirt Boys Junior',
        ]);

        Product_Boys_Junior::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt183381024',
            'price' => 25.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 't-shirt Boys Junior',
        ]);

        Product_Boys_Junior::create([
            'name' => 'Hemd',
            'slug' => 'hemd182766355',
            'price' => 54.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 'Hemd Boys Junior',
        ]);
        Product_Boys_Junior::create([
            'name' => 'Super Skinny Jeans',
            'slug' => 'skinnyjeans182893955',
            'price' => 39.99,
            'category' => 'Junior',
            'gender' => 'Boys',
            'description' => 'Super Skinny Jeans Boys Junior',
        ]);
    }
}
