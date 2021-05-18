<?php

use App\InspiredPictures;
use Illuminate\Database\Seeder;

class InspiredTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InspiredPictures::create([
            'name' => 'Test Subject 1',
            'slug' => 'inspired(1)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 2',
            'slug' => 'inspired(2)',
            'description' => 'Dit kind was gekleed door Sandrien van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 3',
            'slug' => 'inspired(3)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 4',
            'slug' => 'inspired(4)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 5',
            'slug' => 'inspired(5)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 6',
            'slug' => 'inspired(6)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 7',
            'slug' => 'inspired(7)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 8',
            'slug' => 'inspired(8)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 9',
            'slug' => 'inspired(9)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 10',
            'slug' => 'inspired(10)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 11',
            'slug' => 'inspired(11)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 12',
            'slug' => 'inspired(12)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 13',
            'slug' => 'inspired(13)',
            'description' => 'Dit kind was gekleed door Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 14',
            'slug' => 'inspired(14)',
            'description' => 'Dit kind was gekleed door Davina van Boys and Girls',
        ]);

        InspiredPictures::create([
            'name' => 'Test Subject 15',
            'slug' => 'inspired(15)',
            'description' => 'Dit kind was blij dat het kleren kreeg',
        ]);

    }
}
