<?php

use App\Product_Girls_Junior;
use Illuminate\Database\Seeder;

class Product_Girls_JuniorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Girls_Junior::create([
            'name' => 'Jeans Vingino',
            'slug' => 'Girls_Junior (1)',
            'price' => 35.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Jeans Vingino Junior Girls - beschikbare maten 14 - 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Sweater Vingino',
            'slug' => 'Girls_Junior (2)',
            'price' => 54.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Sweater Vingino Junior Girls - beschikbare maat 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Jumpsuit Levis',
            'slug' => 'Girls_Junior (3)',
            'price' => 55.00,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Jumpsuit Levis Junior Girls - beschikbare maten 10 - 12 - 14 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Sweater NoWo lulu',
            'slug' => 'Girls_Junior (4)',
            'price' => 49.95,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Sweater NoWo lulu Junior Girls - beschikbare maten 14 - 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Rok',
            'slug' => 'Girls_Junior (5)',
            'price' => 69.90,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Rok Junior Girls - beschikbare maten 10 - 12 - 14 - 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Kleed Vingino',
            'slug' => 'Girls_Junior (6)',
            'price' => 59.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Kleed Vingino Junior Girls - beschikbare maten 10 - 12 - 14 - 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Junior (7)',
            'price' => 44.95,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Kleed Junior Girls - beschikbare maten 9 - 10 - 12 - 14 - 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Jeans Vingino',
            'slug' => 'Girls_Junior (9)',
            'price' => 49.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Jeans Vingino Junior Girls - beschikbare maat 16 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'Broek Vingino',
            'slug' => 'Girls_Junior (10)',
            'price' => 59.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'Broek Vingino Junior Girls - beschikbare maten 10 - 14 jaar',
        ]);

        Product_Girls_Junior::create([
            'name' => 'T-Shirt Vingino',
            'slug' => 'Girls_Junior (11)',
            'price' => 34.99,
            'category' => 'Junior',
            'gender' => 'Girls',
            'description' => 'T-Shirt Vingino Junior Girls - beschikbare maat 12 jaar',
        ]);
    }
}
