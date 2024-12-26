<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('streets')->insert([
            ['name' => 'Тверская', 'city_id' => 1],
            ['name' => 'Невский проспект', 'city_id' => 2],
            ['name' => 'Ленина', 'city_id' => 3],
        ]);
    }
}
