<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'big_question_id' => 1,
                'place_name' => '高輪',
            ],
            [
                'big_question_id' => 1,
                'place_name' => '亀戸',
            ],
            [
                'big_question_id' => 1,
                'place_name' => '麹町',
            ],
            [
                'big_question_id' => 1,
                'place_name' => '御成門',
            ],
            [
                'big_question_id' => 1,
                'place_name' => '等々力',
            ],
            [
                'big_question_id' => 1,
                'place_name' => '石神井',
            ],
            [
                'big_question_id' => 2,
                'place_name' => '向洋',
            ],
            [
                'big_question_id' => 2,
                'place_name' => '御調',
            ],
            [
                'big_question_id' => 2,
                'place_name' => '銀山',
            ],
            [
                'big_question_id' => 2,
                'place_name' => '十四日',
            ],
            ]);
    }
}
