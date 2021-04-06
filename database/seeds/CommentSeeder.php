<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'match_id' => '1',
            'user_id' => '1',
            'comment_text' => 'GG WP'
        ]);
        DB::table('comments')->insert([
            'match_id' => '1',
            'user_id' => '2',
            'comment_text' => 'NICE!'
        ]);
        DB::table('comments')->insert([
            'match_id' => '1',
            'user_id' => '3',
            'comment_text' => 'POG'
        ]);
        DB::table('comments')->insert([
            'match_id' => '1',
            'user_id' => '4',
            'comment_text' => 'LOL'
        ]);
        DB::table('comments')->insert([
            'match_id' => '2',
            'user_id' => '4',
            'comment_text' => 'You sure?'
        ]);
        DB::table('comments')->insert([
            'match_id' => '2',
            'user_id' => '3',
            'comment_text' => 'Ez mmr!'
        ]);
        DB::table('comments')->insert([
            'match_id' => '2',
            'user_id' => '2',
            'comment_text' => 'POG'
        ]);
        DB::table('comments')->insert([
            'match_id' => '2',
            'user_id' => '1',
            'comment_text' => '1k moron'
        ]);
    }
}
