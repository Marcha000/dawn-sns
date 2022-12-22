<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('posts')->insert([
            [
                'user_id' => '1',
                'posts' => '照井です'
            ],
             [
                'user_id' => '1',
                'posts' => 'よろしくお願いします。'
            ],
            [   'user_id' => '2',
                'posts' => '伊藤です'
            ],
            [
                'user_id' => '3',
                'posts' => '池田です']
    ]);
    }
}
