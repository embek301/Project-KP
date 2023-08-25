<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name'=>'Staff1',
            ],
            [
                'name'=>'Staff2',
            ],
            [
                'name'=>'Staff3',
            ],
            [
                'name'=>'Spv Sales',
            ],
            [
                'name'=>'Kacab',
            ],
            [
                'name'=>'Management',
            ],
            [
                'name'=>'HRD',
            ],
            [
                'name'=>'Head',
            ],
            [
                'name'=>'Kabeng',
            ],
            [
                'name'=>'Admin',
            ],

        ]);
    }
}