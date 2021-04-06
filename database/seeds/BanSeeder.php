<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '11',
            'ban_order' => '1'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '12',
            'ban_order' => '2'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '13',
            'ban_order' => '3'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '14',
            'ban_order' => '4'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '15',
            'ban_order' => '5'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '16',
            'ban_order' => '6'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '1',
            'hero_id' => '17',
            'ban_order' => '7'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '18',
            'ban_order' => '1'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '19',
            'ban_order' => '2'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '20',
            'ban_order' => '3'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '21',
            'ban_order' => '4'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '22',
            'ban_order' => '5'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '23',
            'ban_order' => '6'
        ]);
        DB::table('bans')->insert([
            'match_id' => '1',
            'side' => '2',
            'hero_id' => '24',
            'ban_order' => '7'
        ]);
        //match 2
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '35',
            'ban_order' => '1'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '36',
            'ban_order' => '2'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '37',
            'ban_order' => '3'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '38',
            'ban_order' => '4'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '39',
            'ban_order' => '5'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '40',
            'ban_order' => '6'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '1',
            'hero_id' => '41',
            'ban_order' => '7'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '42',
            'ban_order' => '1'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '43',
            'ban_order' => '2'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '44',
            'ban_order' => '3'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '45',
            'ban_order' => '4'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '46',
            'ban_order' => '5'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '47',
            'ban_order' => '6'
        ]);
        DB::table('bans')->insert([
            'match_id' => '2',
            'side' => '2',
            'hero_id' => '48',
            'ban_order' => '7'
        ]);
    }
}
