<?php

use App\Products;
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
        Products::create([
            'name' => 'Set Hemdje & Salopette',
            'slug' => 'Boys_Baby (1)',
            'price' => 53.99,
            'category' => 1,
            'gender' => 1,
            'description' => 'Set Hemdje & Salopette Baby Boys - beschikbare maten 56 - 62 - 68',
        ]);

        Products::create([
            'name' => 'T-shirt',
            'slug' => 'Boys_Baby (2)',
            'price' => 17.99,
            'category' => 1,
            'gender' => 1,
            'description' => 'T-shirt Baby Boys - beschikbare maten 56 - 62 - 68',
        ]);

        Products::create([
            'name' => 'Broek',
            'slug' => 'Boys_Mini (1)',
            'price' => 16.99,
            'category' => 2,
            'gender' => 1,
            'description' => 'Broek boys mini - beschikbare maten 74 - 80 - 86 - 92',
        ]);

        Products::create([
            'name' => 'Hemd mayoral',
            'slug' => 'Boys_Mini (2)',
            'price' => 26.99,
            'category' => 2,
            'gender' => 1,
            'description' => 'Hemd mayoral boys mini - beschikbare maten 74 - 80 - 92',
        ]);

        Products::create([
            'name' => 'Broek mayoral',
            'slug' => 'Boys_Mini (3)',
            'price' => 30.99,
            'category' => 2,
            'gender' => 1,
            'description' => 'Broek mayoral boys mini - beschikbare maat 92',
        ]);

        Products::create([
            'name' => 'T-Shirt S.Oliver',
            'slug' => 'Boys_Mini (4)',
            'price' => 13.99,
            'category' => 2,
            'gender' => 1,
            'description' => 'T-Shirt S.Oliver boys mini - beschikbare maat 80',
        ]);

        Products::create([
            'name' => 'Blazer SOMEONE',
            'slug' => 'Boys_Kids (1)',
            'price' => 39.95,
            'category' => 3,
            'gender' => 1,
            'description' => 'Blazer boys kids',
        ]);

        Products::create([
            'name' => 'Jeans Super Skinny CARS JEANS',
            'slug' => 'Boys_Kids (2)',
            'price' => 39.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Jeans Super Skinny CARS JEANS beschikbare maten 3 - 4 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt Oceans',
            'slug' => 'Boys_Kids (3)',
            'price' => 28.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'T_-Shirt Oceans',
        ]);

        Products::create([
            'name' => 'T-Shirt SOMEONE',
            'slug' => 'Boys_Kids (4)',
            'price' => 17.95,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt SOMEONE beschikbare maten 3 - 4 jaar',
        ]);

        Products::create([
            'name' => 'Polo mayoral',
            'slug' => 'Boys_Kids (5)',
            'price' => 32.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'Polo mayoral - beschikbare maten 3 - 4 jaar',
        ]);

        Products::create([
            'name' => 'Sweater S.O. Cozy!',
            'slug' => 'Boys_Kids (7)',
            'price' => 25.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Sweater S.O. Cozy! - beschikbare maat 140',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (8)',
            'price' => 19.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (9)',
            'price' => 14.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 2 - 3 - 4 - 5 - 6 jaar',
        ]);

        Products::create([
            'name' => 'Hemd Vingino',
            'slug' => 'Boys_Kids (10)',
            'price' => 54.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Hemd Vingino - beschikbare maten 6 - 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (11)',
            'price' => 21.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 2 - 3 - 4 - 6 - 7 - 8 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (12)',
            'price' => 14.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 3 - 6 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt SOMEONE',
            'slug' => 'Boys_Kids (13)',
            'price' => 17.95,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt SOMEONE - beschikbare maten 3 - 5 - 7 - 8 jaar',
        ]);

        Products::create([
            'name' => 'Gilet Le Chic Garcon',
            'slug' => 'Boys_Kids (14)',
            'price' => 49.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Gilet Le Chic Garcon - beschikbare maten 3 - 5 - 6 - 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Short',
            'slug' => 'Boys_Kids (15)',
            'price' => 22.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'Short Boys Kids - beschikbare maten 2 - 4 - 5 - 6 - 8 - 9 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (16)',
            'price' => 21.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 2 - 3 - 4 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt S.Oliver',
            'slug' => 'Boys_Kids (17)',
            'price' => 11.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt S.Oliver - beschikbare maten 92/98',
        ]);

        Products::create([
            'name' => 'Gilet S.O. Cozy!',
            'slug' => 'Boys_Kids (18)',
            'price' => 29.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Gilet S.O. Cozy! - beschikbare maten 92/98',
        ]);

        Products::create([
            'name' => 'Broek S.O. Cozy!',
            'slug' => 'Boys_Kids (19)',
            'price' => 25.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Broek S.O. Cozy! - beschikbare maten 92 - 98 - 134 - 140',
        ]);

        Products::create([
            'name' => 'T-Shirt S.Oliver',
            'slug' => 'Boys_Kids (20)',
            'price' => 11.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt S.Oliver - beschikbare maten 92/98 - 128/134',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Boys_Kids (21)',
            'price' => 19.50,
            'category' => 3,
            'gender' => 1,
            'description' => 'T-Shirt mayoral - beschikbare maten 2 - 4 jaar',
        ]);

        Products::create([
            'name' => 'Broek mayoral',
            'slug' => 'Boys_Kids (22)',
            'price' => 28.99,
            'category' => 3,
            'gender' => 1,
            'description' => 'Broek mayoral - beschikbare maten 2 - 4 - 7 - 8 - 9 jaar',
        ]);

        Products::create([
            'name' => 'Gilet',
            'slug' => 'gilet183136420',
            'price' => 46.99,
            'category' => 4,
            'gender' => 1,
            'description' => 'Gilet Boys Junior',
        ]);

        Products::create([
            'name' => 'Short',
            'slug' => 'short183111082',
            'price' => 30.99,
            'category' => 4,
            'gender' => 1,
            'description' => 'Short Boys Junior',
        ]);

        Products::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt182371702',
            'price' => 17.99,
            'category' => 4,
            'gender' => 1,
            'description' => 't-shirt Boys Junior',
        ]);

        Products::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt183216188',
            'price' => 19.99,
            'category' => 4,
            'gender' => 1,
            'description' => 't-shirt Boys Junior',
        ]);

        Products::create([
            'name' => 'T-Shirt',
            'slug' => 'tshirt183381024',
            'price' => 25.99,
            'category' => 4,
            'gender' => 1,
            'description' => 't-shirt Boys Junior',
        ]);

        Products::create([
            'name' => 'Hemd',
            'slug' => 'hemd182766355',
            'price' => 54.99,
            'category' => 4,
            'gender' => 1,
            'description' => 'Hemd Boys Junior',
        ]);
        Products::create([
            'name' => 'Super Skinny Jeans',
            'slug' => 'skinnyjeans182893955',
            'price' => 39.99,
            'category' => 4,
            'gender' => 1,
            'description' => 'Super Skinny Jeans Boys Junior',
        ]);

        Products::create([
            'name' => 'Kleed Levis',
            'slug' => 'Girls_Baby (1)',
            'price' => 40.00,
            'category' => 5,
            'gender' => 2,
            'description' => 'Kleed Levis Baby Girl - beschikbare maat 68',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Baby (2)',
            'price' => 25.99,
            'category' => 5,
            'gender' => 2,
            'description' => 'Kleed Baby Girl - beschikbare maten 56 - 62 - 68',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Mini (1)',
            'price' => 25.99,
            'category' => 6,
            'gender' => 2,
            'description' => 'Kleed Mini Girl - beschikbare maten 74 - 80 - 86',
        ]);

        Products::create([
            'name' => 'Salopette mayoral',
            'slug' => 'Girls_Mini (2)',
            'price' => 39.50,
            'category' => 6,
            'gender' => 2,
            'description' => 'Salopette mayoral Mini Girl - beschikbare maten 74 - 80 - 86',
        ]);

        Products::create([
            'name' => 'Salopette',
            'slug' => 'Girls_Mini (3)',
            'price' => 29.99,
            'category' => 6,
            'gender' => 2,
            'description' => 'Salopette Mini Girl - beschikbare maten 74 - 80 - 86 - 92',
        ]);

        Products::create([
            'name' => 'Kleed Levis',
            'slug' => 'Girls_Mini (4)',
            'price' => 40.00,
            'category' => 6,
            'gender' => 2,
            'description' => 'Kleed Levis Mini Girl - beschikbare maten 74 - 80 - 98',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Mini (5)',
            'price' => 29.99,
            'category' => 6,
            'gender' => 2,
            'description' => 'Kleed Mini Girl - beschikbare maten 74 - 80 - 86 - 92',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Kids (1)',
            'price' => 35.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Kleed Kids Girl - beschikbare maten 4 - 6 - 8 - 9 jaar',
        ]);

        Products::create([
            'name' => 'Broek Vingino',
            'slug' => 'Girls_Kids (2)',
            'price' => 59.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Broek Vingino Kids Girl - beschikbare maten 4 - 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Jeans Vinino',
            'slug' => 'Girls_Kids (3)',
            'price' => 49.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Jeans Vinino Kids Girl - beschikbare maat 6 jaar',
        ]);

        Products::create([
            'name' => 'Rok',
            'slug' => 'Girls_Kids (4)',
            'price' => 69.90,
            'category' => 7,
            'gender' => 2,
            'description' => 'Rok Kids Girl - beschikbare maten 7 - 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Broek',
            'slug' => 'Girls_Kids (5)',
            'price' => 29.95,
            'category' => 7,
            'gender' => 2,
            'description' => 'Broek Kids Girl - beschikbare maten 3 - 4 - 5 - 8 - 9 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Broek',
            'slug' => 'Girls_Kids (6)',
            'price' => 30.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Broek Kids Girl - beschikbare maten 6 - 8 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt',
            'slug' => 'Girls_Kids (7)',
            'price' => 34.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'T-Shirt Kids Girl - beschikbare maat 10 jaar',
        ]);

        Products::create([
            'name' => 'Kleed mayoral',
            'slug' => 'Girls_Kids (8)',
            'price' => 44.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Kleed mayoral Kids Girl - beschikbare maten 2 - 3 - 4 - 6 - 7 - 8 - 9 jaar',
        ]);

        Products::create([
            'name' => 'Gilet SOMEONE',
            'slug' => 'Girls_Kids (10)',
            'price' => 34.95,
            'category' => 7,
            'gender' => 2,
            'description' => 'Gilet SOMEONE Kids Girl - beschikbare maten 6 - 7 - 8 - 9 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Sweater NOWO lulu',
            'slug' => 'Girls_Kids (11)',
            'price' => 49.95,
            'category' => 7,
            'gender' => 2,
            'description' => 'Sweater NOWO lulu Kids Girl - beschikbare maten 5 - 6 - 10 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt S.Oliver',
            'slug' => 'Girls_Kids (12)',
            'price' => 9.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'T-Shirt S.Oliver Kids Girl - beschikbare maten 92/98 - 104/110 - 16/122 - 128/134 - 140',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Kids (13)',
            'price' => 59.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Kleed Kids Girl - beschikbare maten 4 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Kids (14)',
            'price' => 54.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Kleed Kids Girl - beschikbare maten 4 - 5 - 6 jaar',
        ]);

        Products::create([
            'name' => 'Broek',
            'slug' => 'Girls_Kids (16)',
            'price' => 36.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Broek Kids Girl - beschikbare maat 2 jaar',
        ]);

        Products::create([
            'name' => 'Jumpsuit SOMEONE',
            'slug' => 'Girls_Kids (17)',
            'price' => 34.95,
            'category' => 7,
            'gender' => 2,
            'description' => 'Jumpsuit SOMEONE Kids Girl - beschikbare maten 4 - 6 - 7 - 8 - 9 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Jeans Vingino',
            'slug' => 'Girls_Kids (19)',
            'price' => 59.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Jeans Vingino Kids Girl - beschikbare maten 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Rok',
            'slug' => 'Girls_Kids (20)',
            'price' => 44.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Rok Kids Girl - beschikbare maten 2 - 5 - 10 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Girls_Kids (21)',
            'price' => 22.50,
            'category' => 7,
            'gender' => 2,
            'description' => 'T-Shirt mayoral Kids Girl - beschikbare maat 9 jaar',
        ]);

        Products::create([
            'name' => 'Jumpsuit Levis',
            'slug' => 'Girls_Kids (22)',
            'price' => 50.00,
            'category' => 7,
            'gender' => 2,
            'description' => 'Jumpsuit Levis Kids Girl - beschikbare maten 6 - 8 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt Vingino',
            'slug' => 'Girls_Kids (23)',
            'price' => 34.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'T-Shirt Vingino Kids Girl - beschikbare maten 4 - 8 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt mayoral',
            'slug' => 'Girls_Kids (25)',
            'price' => 21.50,
            'category' => 7,
            'gender' => 2,
            'description' => 'T-Shirt mayoral Kids Girl - beschikbare maten 2 - 4 - 8 jaar',
        ]);

        Products::create([
            'name' => 'Gilet Le Chic',
            'slug' => 'Girls_Kids (26)',
            'price' => 59.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Gilet Le Chic Kids Girl - beschikbare maten 4 - 8 - 10 jaar',
        ]);

        Products::create([
            'name' => 'Jeansvest Le Chic',
            'slug' => 'Girls_Kids (27)',
            'price' => 49.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Jeansvest Le Chic Kids Girl - beschikbare maten 3 - 4 - 5 - 8 jaar',
        ]);

        Products::create([
            'name' => 'Salopette S.Oliver',
            'slug' => 'Girls_Kids (28)',
            'price' => 39.99,
            'category' => 7,
            'gender' => 2,
            'description' => 'Salopette S.Oliver Kids Girl - beschikbare maten 3 - 5 - 7 jaar',
        ]);

        Products::create([
            'name' => 'Jeans Vingino',
            'slug' => 'Girls_Junior (1)',
            'price' => 35.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'Jeans Vingino Junior Girls - beschikbare maten 14 - 16 jaar',
        ]);

        Products::create([
            'name' => 'Sweater Vingino',
            'slug' => 'Girls_Junior (2)',
            'price' => 54.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'Sweater Vingino Junior Girls - beschikbare maat 16 jaar',
        ]);

        Products::create([
            'name' => 'Jumpsuit Levis',
            'slug' => 'Girls_Junior (3)',
            'price' => 55.00,
            'category' => 8,
            'gender' => 2,
            'description' => 'Jumpsuit Levis Junior Girls - beschikbare maten 10 - 12 - 14 jaar',
        ]);

        Products::create([
            'name' => 'Sweater NoWo lulu',
            'slug' => 'Girls_Junior (4)',
            'price' => 49.95,
            'category' => 8,
            'gender' => 2,
            'description' => 'Sweater NoWo lulu Junior Girls - beschikbare maten 14 - 16 jaar',
        ]);

        Products::create([
            'name' => 'Rok',
            'slug' => 'Girls_Junior (5)',
            'price' => 69.90,
            'category' => 8,
            'gender' => 2,
            'description' => 'Rok Junior Girls - beschikbare maten 10 - 12 - 14 - 16 jaar',
        ]);

        Products::create([
            'name' => 'Kleed Vingino',
            'slug' => 'Girls_Junior (6)',
            'price' => 59.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'Kleed Vingino Junior Girls - beschikbare maten 10 - 12 - 14 - 16 jaar',
        ]);

        Products::create([
            'name' => 'Kleed',
            'slug' => 'Girls_Junior (7)',
            'price' => 44.95,
            'category' => 8,
            'gender' => 2,
            'description' => 'Kleed Junior Girls - beschikbare maten 9 - 10 - 12 - 14 - 16 jaar',
        ]);

        Products::create([
            'name' => 'Jeans Vingino',
            'slug' => 'Girls_Junior (9)',
            'price' => 49.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'Jeans Vingino Junior Girls - beschikbare maat 16 jaar',
        ]);

        Products::create([
            'name' => 'Broek Vingino',
            'slug' => 'Girls_Junior (10)',
            'price' => 59.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'Broek Vingino Junior Girls - beschikbare maten 10 - 14 jaar',
        ]);

        Products::create([
            'name' => 'T-Shirt Vingino',
            'slug' => 'Girls_Junior (11)',
            'price' => 34.99,
            'category' => 8,
            'gender' => 2,
            'description' => 'T-Shirt Vingino Junior Girls - beschikbare maat 12 jaar',
        ]);
    }
}
