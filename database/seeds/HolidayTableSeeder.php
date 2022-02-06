<?php

use Illuminate\Database\Seeder;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('holidays')->truncate();

        $holidays = [
            [
                'name' => '平日',
            ],
            [
                'name' => '土日',
            ],
            [
                'name' => '祝日',
            ],
        ];
        DB::table('holidays')->insert($holidays);
    }
}
