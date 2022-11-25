<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3 bis dengan seat 27
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 1',
            'license_number' => 'L 3562 UA',
            'capacity' => '27',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 2',
            'license_number' => 'L 1987 UA',
            'capacity' => '27',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 3',
            'license_number' => 'L 7721 UA',
            'capacity' => '27',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);

        // 3 bis dengan seat 35
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 4',
            'license_number' => 'L 5621 UA',
            'capacity' => '35',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 5',
            'license_number' => 'L 1729 UA',
            'capacity' => '35',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 6',
            'license_number' => 'L 5298 UA',
            'capacity' => '35',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);

        // 1 bis besar seat 45
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 7',
            'license_number' => 'L 1167 UA',
            'capacity' => '45',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);

        // 1 bis VIP
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 8',
            'license_number' => 'L 1718 UA',
            'capacity' => '27',
            'identity_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);

        // 1 bis perhubungan  seat 27
        DB::table('buses')->insert([
            'unit_name' => 'Airlangga Bus 9',
            'license_number' => 'L 1658 UA',
            'capacity' => '27',
            'identity_id' => 2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

        ]);
    }
}
