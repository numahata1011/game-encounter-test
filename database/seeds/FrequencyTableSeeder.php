<?php

use Illuminate\Database\Seeder;

class FrequencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('frequencies')->truncate();

        $frequencies = [
            [
                'name' => '気合いの毎日',
            ],
            [
                'name' => '休日にがっつり',
            ],
            [
                'name' => 'マイペースに週1~2',
            ],
        ];
        DB::table('frequencies')->insert($frequencies);
    }
}
