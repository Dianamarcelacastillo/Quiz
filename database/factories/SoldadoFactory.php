<?php

namespace Database\Factories;
use App\Models\soldado;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldadoFactory extends Factory
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
