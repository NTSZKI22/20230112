<?php

namespace Database\Factories;

use App\Models\CarModel;
use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model_id' => CarModel::all()->random()->id,
            'merchant_id' => Merchant::all()->random()->id,
            'fuel' => $this->faker->randomElement([
                'Benzin',
                'Gázolaj',
                'Hibrid',
                'Elektromos'
            ]),
            'engine' => $this->faker->randomNumber(4, true),
            'active' => $this->faker->boolean(80)
        ];
    }
}
