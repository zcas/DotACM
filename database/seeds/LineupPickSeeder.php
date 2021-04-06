<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineupPickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lineup_picks')->insert([
            'lineup_id' => '1',
            'hero_id' => '34',
            "position" => '1',
        ]);
        DB::table('lineup_picks')->insert([
            'lineup_id' => '1',
            'hero_id' => '35',
            "position" => '2',
        ]);
        DB::table('lineup_picks')->insert([
            'lineup_id' => '1',
            'hero_id' => '1',
            "position" => '3',
        ]);
        DB::table('lineup_picks')->insert([
            'lineup_id' => '1',
            'hero_id' => '8',
            "position" => '4',
        ]);
        DB::table('lineup_picks')->insert([
            'lineup_id' => '1',
            'hero_id' => '40',
            "position" => '5',
        ]);
    }
}
