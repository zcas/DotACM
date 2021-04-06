<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            'match_id' => '1',
            'side' => '1',
            'user_id' => '1'
        ]);
        DB::table('votes')->insert([
            'match_id' => '1',
            'side' => '2',
            'user_id' => '2'
        ]);
        DB::table('votes')->insert([
            'match_id' => '1',
            'side' => '1',
            'user_id' => '3'
        ]);
        DB::table('votes')->insert([
            'match_id' => '1',
            'side' => '1',
            'user_id' => '4'
        ]);
    }
}
