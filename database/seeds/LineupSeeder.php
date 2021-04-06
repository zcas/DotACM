<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Carbon;

class LineupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lineups')->insert([
            'user_id' => '1',
            'description' => 'testing',
            'title' => 'Suppa strong draft',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
