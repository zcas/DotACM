<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Zcas',
            'email' => 'zcasgg@gmail.com',
            'password' => Hash::make('123456123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Bepo',
            'email' => 'bepogg@gmail.com',
            'password' => Hash::make('123456123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ra',
            'email' => 'ragg@gmail.com',
            'password' => Hash::make('123456123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Zeus',
            'email' => 'Zeusgg@gmail.com',
            'password' => Hash::make('123456123'),
        ]);
    }
}