<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailJadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_jadwals')->insert([
            'jadwal_id' => 1,
            'bus_id' => 1,
            'keberangkatan_id' => 1,
            'kedatangan_id' => 2,
            'jam_keberangkatan_id' => 1,
            'jam_kedatangan_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
