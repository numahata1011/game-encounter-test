<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->truncate();

        $genres = [
            [
                'name' => 'アクション',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'アドベンチャー',
                'btn_color' => 'btnx-genre2',
            ],

            [
                'name' => 'シューティング',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'ロールプレイング',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => 'シミュレーション',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'スポーツ',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => '格闘',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'レース',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => '音楽ゲーム',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'パズル',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => 'テーブルゲーム',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => 'パーティ',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => 'コミュニケーション',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => '学習・教育',
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => 'トレーニング',
                'btn_color' => 'btnx-genre1',
            ],
            [
                'name' => "乙女ゲーム",
                'btn_color' => 'btnx-genre2',
            ],
            [
                'name' => 'ツール',
                'btn_color' => 'btnx-genre1',
            ],
        ];
        DB::table('genres')->insert($genres);

    }
}
