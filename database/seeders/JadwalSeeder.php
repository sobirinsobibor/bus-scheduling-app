<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('jadwals')->insert([
            'hari' => 'kamis',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        
    }
}
