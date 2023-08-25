<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'nauval',
                'email' => 'nauvalalfarisi95@gmail.com',
                'password' => Hash::make('noval007@'),
                'role'=>10,
                'cabang'=>1
            ],
        ]);
    }
}