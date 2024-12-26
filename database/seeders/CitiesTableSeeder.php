<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Москва', 'region_id' => 1],
            ['name' => 'Санкт-Петербург', 'region_id' => 2],
            ['name' => 'Екатеринбург', 'region_id' => 3],
        ]);
    }
}
