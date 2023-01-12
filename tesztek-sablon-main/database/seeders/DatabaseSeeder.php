<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MerchantsTableSeeder::class,
            BrandsTableSeeder::class,
            ModelsTableSeeder::class,
            CarsTableSeeder::class
        ]);
    }
}
