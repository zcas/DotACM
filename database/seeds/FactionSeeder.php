<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factions')->insert([
            'faction' => 'Radiant'
        ]);
        DB::table('factions')->insert([
            'faction' => 'Dire'
        ]);
    }
}
