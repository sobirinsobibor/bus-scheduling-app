<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'location' => 'Kampus A',
            'address' => 'Jl. Mayjen Prof. Dr. Moestopo No.47, Pacar Kembang, Kec. Tambaksari, Kota SBY, Jawa Timur 60132',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('areas')->insert([
            'location' => 'Kampus B',
            'address' => 'Jl. Airlangga No.4 - 6, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60115',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('areas')->insert([
            'location' => 'Kampus C',
            'address' => 'Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
