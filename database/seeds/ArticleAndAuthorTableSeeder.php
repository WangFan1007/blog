<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'article_name'=>'ジョジョの奇妙な冒険',
                'author_id'=> rand(1,3),
            ],
            [
                'article_name'=>'上野さんは不器用',
                'author_id'=> rand(1,3),
            ],
            [
                'article_name'=>'ジョジョの奇妙な冒险PART7',
                'author_id'=> rand(1,3),
            ],

        ]);
        DB::table('author')->insert([
            [
                'author_name'=>'荒木飞吕彦',
            ],
            [
                'author_name'=>'tugeneko',
            ],
        ]);
    }
}
