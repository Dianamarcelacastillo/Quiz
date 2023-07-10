<?php

namespace Database\Seeders;
use App\Models\servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cuartel::factory(50)->create();
    }
}