<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = [
            [
                'id' => 1,
                'brand_id' => 1,
                'name' => '146'
            ],
            [
                'id' => 2,
                'brand_id' => 1,
                'name' => 'Julia'
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'name' => 'Mondeo'
            ],
            [
                'id' => 4,
                'brand_id' => 3,
                'name' => 'Focus'
            ],
            [
                'id' => 5,
                'brand_id' => 5,
                'name' => "A4"
            ],
            [
                'id' => 6,
                'brand_id' => 5,
                'name' => "A8"
            ]
        ];

        foreach ($models as $data) {
            $model = CarModel::firstOrNew([
                'id' => $data["id"]
            ]);

            $model->brand_id = $data['brand_id'];
            $model->name = $data['name'];
            $model->save();
        }
    }
}
