<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BigQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('big_questions')->insert([
            [
                'name' => '東京の難読地名クイズ',
                'order_num' => 1
            ],
            [
                'name' => '広島の難読地名クイズ',
                'order_num' => 2
            ],
        ]);
    }
}
