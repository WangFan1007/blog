<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'paper_name' => '七中模拟',
                'start_time' => strtotime('+7 days'),
                'duration' => '120',
            ],
            [
                'paper_name' => '月考',
                'start_time' => strtotime('+8 days'),
                'duration' => '120',
            ],
            [
                'paper_name' => '期末',
                'start_time' => strtotime('+9 days'),
                'duration' => '120',
            ],
        ];
        DB::table('paper')->insert($data);
    }
}
