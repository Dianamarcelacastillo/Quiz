<?php

namespace Database\Factories;
use App\Models\cuartel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuartelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
        ];
    }
}
