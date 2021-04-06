<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'position' => '1'
        ]);
        DB::table('positions')->insert([
            'position' => '2'
        ]);
        DB::table('positions')->insert([
            'position' => '3'
        ]);
        DB::table('positions')->insert([
            'position' => '4'
        ]);
        DB::table('positions')->insert([
            'position' => '5'
        ]);
    }
}
