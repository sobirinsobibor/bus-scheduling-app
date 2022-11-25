<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('special_identities')->insert([
            'identity' => 'vip',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        DB::table('special_identities')->insert([
            'identity' => 'reguler',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
