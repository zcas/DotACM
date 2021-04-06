<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AvatarSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FactionSeeder::class);
        $this->call(HerosSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(MatchSeeder::class);
        $this->call(PickSeeder::class);
        $this->call(BanSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(VoteSeeder::class);
        $this->call(LineupSeeder::class);
        $this->call(LineupPickSeeder::class);
    }
}
