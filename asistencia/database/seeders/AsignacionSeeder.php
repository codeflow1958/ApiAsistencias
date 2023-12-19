<?php

namespace Database\Seeders;

use App\Models\asignacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asignacion::factory(20)->create();
    }
}
