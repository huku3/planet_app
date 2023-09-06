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
        $param =[
        
            [
                '名前' => '水星',
                '英名' => 'MERCURY',
                '半径' => 2439,
                '重量' => 3310
            ],

            [
                '名前' => '金星',
                '英名' => 'VENUS',
                '半径' => 6052,
                '重量' => 48700
            ],

            [
                '名前' => '地球',
                '英名' => 'EARTH',
                '半径' => 6378,
                '重量' => 59760
            
            
            ]
        
        
        ];

        DB::table('planets')->insert($param);
    }
}
