<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id' => 1,
                'name' => 'Alfa Romeo'
            ],
            [
                'id' => 2,
                'name' => 'Chevrolette'
            ],
            [
                'id' => 3,
                'name' => 'Ford'
            ],
            [
                'id' => 4,
                'name' => 'BMW'
            ],
            [
                'id' => 5,
                'name' => "Audi"
            ]
        ];

        foreach ($brands as $data) {
            $brand = Brand::firstOrNew([
                'id' => $data["id"]
            ]);

            $brand->name = $data['name'];
            $brand->save();
        }
    }
}
