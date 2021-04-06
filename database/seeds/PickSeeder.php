<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //match 1
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '1',
            "position" => '1',
            'pick_order' => '1'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '2',
            "position" => '2',
            'pick_order' => '2'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '3',
            "position" => '3',
            'pick_order' => '3'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '4',
            "position" => '4',
            'pick_order' => '4'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '5',
            "position" => '5',
            'pick_order' => '5'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '6',
            "position" => '1',
            'pick_order' => '1'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '7',
            "position" => '2',
            'pick_order' => '2'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '8',
            "position" => '3',
            'pick_order' => '3'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '9',
            "position" => '4',
            'pick_order' => '4'
        ]);
        DB::table('picks')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '10',
            "position" => '5',
            'pick_order' => '5'
        ]);
            //match 2
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '1',
        'hero_id' => '25',
        "position" => '1',
        'pick_order' => '1'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '1',
        'hero_id' => '26',
        "position" => '2',
        'pick_order' => '2'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '1',
        'hero_id' => '27',
        "position" => '3',
        'pick_order' => '3'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '1',
        'hero_id' => '28',
        "position" => '4',
        'pick_order' => '4'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '1',
        'hero_id' => '29',
        "position" => '5',
        'pick_order' => '5'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '2',
        'hero_id' => '30',
        "position" => '1',
        'pick_order' => '1'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '2',
        'hero_id' => '31',
        "position" => '2',
        'pick_order' => '2'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '2',
        'hero_id' => '32',
        "position" => '3',
        'pick_order' => '3'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '2',
        'hero_id' => '33',
        "position" => '4',
        'pick_order' => '4'
    ]);
    DB::table('picks')->insert([
        'match_id' => '2',
        'side' => '2',
        'hero_id' => '34',
        "position" => '5',
        'pick_order' => '5'
    ]);
    }
}
