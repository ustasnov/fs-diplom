<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halls')->insert([
            'name' => 'Зал',
            'number_of_rows' => 0,
            'seats_in_row' => 0,
        ]);
        DB::table('halls')->insert([
            'name' => 'Зал',
            'number_of_rows' => 0,
            'seats_in_row' => 0,
        ]);
        DB::table('halls')->insert([
            'name' => 'Зал',
            'number_of_rows' => 0,
            'seats_in_row' => 0,
        ]);
    }
}
