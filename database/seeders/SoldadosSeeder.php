<?php

namespace Database\Seeders;
use App\Models\soldado;
use Illuminate\Database\Seeder;

class SoldadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        soldado::factory(50)->create();
    }
}