<?php

namespace Database\Seeders;
use App\Models\cuartel;
use Illuminate\Database\Seeder;

class CuartelSeeder extends Seeder
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