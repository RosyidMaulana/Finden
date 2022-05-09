<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DaerahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jatim'=>$this->faker->randomElement([
                'Kabupaten Bangkalan',
                'Kabupaten Banyuwangi',
                'Kabupaten Blitar',
                'Kabupaten Bojonegoro',
                
            ])
        ];
    }
}
