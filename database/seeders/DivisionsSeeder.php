<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Divisiones;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = new Divisiones;
        $division->nombre_division = "AFC North";
        $division->logo = "urlasdfd";
        $division->sb_division = 14;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "AFC South";
        $division->logo = "urlasdfd";
        $division->sb_division = 17;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "AFC East";
        $division->logo = "urlasdfd";
        $division->sb_division = 26;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "AFC West";
        $division->logo = "urlasdfd";
        $division->sb_division = 13;
        $division->save();

        #NFC

        $division = new Divisiones;
        $division->nombre_division = "NFC North";
        $division->logo = "urlasdfd";
        $division->sb_division = 15;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "NFC South";
        $division->logo = "urlasdfd";
        $division->sb_division = 5;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "NFC East";
        $division->logo = "urlasdfd";
        $division->sb_division = 19;
        $division->save();

        $division = new Divisiones;
        $division->nombre_division = "NFC West";
        $division->logo = "urlasdfd";
        $division->sb_division = 24;
        $division->save();
       
    }
}
