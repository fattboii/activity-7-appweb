<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RobotKit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
