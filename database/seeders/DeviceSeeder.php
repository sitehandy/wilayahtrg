<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_types')->insert([
            'name' => 'Router'
        ]);

        DB::table('device_types')->insert([
            'name' => 'Card'
        ]);

        DB::table('device_types')->insert([
            'name' => 'SFP'
        ]);

        DB::table('device_types')->insert([
            'name' => 'Patch Code'
        ]);
    }
}
