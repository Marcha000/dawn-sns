<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('follows')->insert([
            [
             'follow' => '2',
             'follower' => '1'
            ],
            [
              'follow' => '3',
             'follower' => '1'
            ],
             [
              'follow' => '1',
             'follower' => '2'
            ]
            ]);
    }
}
