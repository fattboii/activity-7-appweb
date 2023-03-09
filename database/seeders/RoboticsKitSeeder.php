<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class RoboticsKit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder for the three robotics kits
        DB::table('robokits')->insert([
            'kit_name' => 'StarterKit',
        ]);
        DB::table('robokits')->insert([
            'kit_name' => 'Educational Robotics Kit',
        ]);
        DB::table('robokits')->insert([
            'kit_name' => 'Kit5',
        ]);
    }
}
