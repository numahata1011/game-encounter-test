<?php

use Illuminate\Database\Seeder;

class ConsoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('consoles')->truncate();

        $consoles = [
            [
                'name' => 'PlayStation4/5',
                'btn_color' => 'btnx-indigo-light',
            ],
            [
                'name' => 'PlayStationVita',
                'btn_color' => 'btnx-purpule-light',
            ],
            [
                'name' => "PlayStationVR\nOculusQuest",
                'btn_color' => 'btnx-pink-light',
            ],
            [
                'name' => 'Xbox Series S',
                'btn_color' => 'btnx-orange-light',
            ],
            [
                'name' => 'Nintendo Switch',
                'btn_color' => 'btnx-teal-light',
            ],
            [
                'name' => 'NINTENDO 3DS',
                'btn_color' => 'btnx-cyan-light',
            ],
            [
                'name' => 'PC',
                'btn_color' => 'btnx-lime-light',
            ],
            [
                'name' => 'その他',
                'btn_color' => 'btnx-gray-light',
            ],
        ];
        DB::table('consoles')->insert($consoles);
    }
}
