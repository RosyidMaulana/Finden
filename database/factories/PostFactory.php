<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'slug' =>$this->faker->slug(),
            'gender' =>$this->faker->randomElement(['Perempuan', 'Laki-laki']),
            'age' =>$this->faker->numberBetween(12, 30),
            'contact' =>$this->faker->safeEmail(),
            'rambut' =>$this->faker->randomElement(['ikal', 'lurus', 'gelombang', 'lancip']),
            'mata' =>$this->faker->randomElement(['biru','coklat', 'kuning', 'merah']),
            'tinggi' =>$this->faker->numberBetween(150, 190),
            'last' =>$this->faker->localIpv4(),
            'reward' =>$this->faker->numberBetween(500000, 50000000),
            'spesial' =>$this->faker->sentence(mt_rand(4, 15)),
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 2),
            'jatim_id'=>mt_rand(1, 38),
        ];
    }
}
