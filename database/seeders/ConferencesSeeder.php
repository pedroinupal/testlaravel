<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conferencias;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conferencia = new Conferencias;
        $conferencia->nombre_conferencia = "American Football Conference";
        $conferencia->logo = "urlasdfd";
        $conferencia->sb_conferencia = 30;
        $conferencia->save();

        $conferencia = new Conferencias;
        $conferencia->nombre_conferencia = "National Football Conference";
        $conferencia->logo = "urldos";
        $conferencia->sb_conferencia = 15;
        $conferencia->save();
    }
}
