<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchs')->insert([
            'r_user' => '1',
            'd_user' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('matchs')->insert([
            'r_user' => '3',
            'd_user' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
