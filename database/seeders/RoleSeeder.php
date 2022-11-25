<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'admin',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('roles')->insert([
            'role_name' => 'mahasiswa',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('roles')->insert([
            'role_name' => 'dosen',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('roles')->insert([
            'role_name' => 'karyawan',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
