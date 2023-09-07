<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [

            [
                'pla_name' => '水星',
                'pla_eng_name' => 'MERCURY',
                'radius' => 2439,
                'weight' => 3310
            ],

            [
                'pla_name' => '金星',
                'pla_eng_name' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700
            ],

            [
                'pla_name' => '地球',
                'pla_eng_name' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760


            ]


        ];

        DB::table('planets')->insert($param);
    }
}
