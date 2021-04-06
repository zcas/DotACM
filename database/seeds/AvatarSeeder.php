<?php

use Illuminate\Database\Seeder;
use    Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=51;$i++){
            DB::table('avatars')->insert(['id'=>$i]);
        }
    }
}
