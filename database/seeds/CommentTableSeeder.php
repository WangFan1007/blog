<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            [
                'comment'=>'你们的下一句话是:星尘斗士还会远吗',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'疯狂钻石小的时候生病发高烧，钻石妈妈载着小钻石去医院的路上被一台压路机挡住了去路',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'之前因为画风一直没入坑，后来看下去，被剧情吸引，画风，，，这样的画风才叫帅啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'到了4级的第一件事就是给jojo评9.9',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'还需历练啊，上野！话说都计划通了你为什么老是怂啊上野！',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'论上野的黑科技领先人类多少年233',
                'article_id' => rand(1,3),
            ],
            [
                'comment'=>'变态至极的上野(/≧▽≦)/~┴┴',
                'article_id' => rand(1,3),
            ],
        ]);
    }
}
