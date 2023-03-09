<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use App\Models\users;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder for the three roles that a user has(teacher, student, admin)
        //role ID: 1 = admin, 2 = teacher, 3 = student
        DB::table('users')->insert([
            'user_name' => 'Admin',
            'password' => 'Adm@2022 ',
            'name' => 'Mr Robot',
            'email' => 'admin@robotics.com',
            'phone_number' => '0123456789',
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'user_name' => 'Tecmilenio',
            'password' => 'Adm@2022',
            'name' => 'Mr Cryan',
            'email' => 'tecmilenio@robotics.com',
            'phone_number' => '0123456789',
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'user_name' => 'Student',
            'password' => 'Adm@2022 ',
            'name' => 'Josue',
            'email' => 'student@robotics.com',
            'phone_number' => '0123456789',
            'role' => 3,
        ]);
    }
}
