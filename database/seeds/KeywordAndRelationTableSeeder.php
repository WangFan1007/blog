<?php

use Illuminate\Database\Seeder;

class KeywordAndRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyword')->insert([
            [
                'keyword'=> 'jojo',
            ],
            [
                'keyword'=> '热血',
            ],
            [
                'keyword'=> '萌系',
            ],
            [
                'keyword'=> '黑科技',
            ],
        ]);

        DB::table('relation')->insert([
            [
                'article_id'=> rand(1,3),
                'keyword_id'=>rand(1,4),
            ],
            [
                'article_id'=> rand(1,3),
                'keyword_id'=>rand(1,4),
            ],
            [
                'article_id'=> rand(1,3),
                'keyword_id'=>rand(1,4),
            ],
            [
                'article_id'=> rand(1,3),
                'keyword_id'=>rand(1,4),
            ],
        ]);
    }
}
