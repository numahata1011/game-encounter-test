<?php

use Illuminate\Database\Seeder;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class CommunitylistTableSeeder extends Seeder
{
    const CSV_FILENAME = '/../database/seeds/communities_utf8.csv'; //appからの相対パス

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->truncate();

        $this->command->info('[Start] import data.');

        $config = new LexerConfig();
        // セパレーター指定、"\t"を指定すればtsvファイルとかも取り込めます
        $config->setDelimiter(",");
        // 1行目をスキップ
        $config->setIgnoreHeaderLine(true);
        $lexer = new Lexer($config);
        $interpreter = new Interpreter();
        $interpreter->addObserver(function(array $row) {
            // 登録処理
            $community = \App\Community::create([
                'id' => $row[0],
                // 'name' => $row[1], //
                'name' => str_replace('\r', "\r\n", $row[1]),
                'console_id' => $row[2], //
                'genre_id' => $row[3],
                'explanation' => $row[4],
            ]);
        });

        $lexer->parse(app_path() . self::CSV_FILENAME, $interpreter);

        $this->command->info('[End] import data.');

        // 1→アクション
        // 2→アドベンチャー
        // 3→シューティング
        // 4→ロールプレイング
        // 5→シュミレーション
        // 6→スポーツ
        // 7→格闘
        // 8→レース
        // 9→音楽ゲーム
        // 10→パズル
        // 11→テーブルゲーム
        // 12→パーティ
        // 13→コミュニティ
        // 14→学習・教育
        // 15→トレーニング
        // 16→ツール

        //

        $communities = [
            // 1→PlayStation4/5
            // 2→PlayStationVita
            //     'name' => "GOD EATER\nRESURRCTION",
            //     'console_id' => 2,
            //     'genre_id' => 1,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "GOD EATER2\nRAGE BURST",
            //     'console_id' => 2,
            //     'genre_id' => 1,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "ぼくのなつやすみ🄬2\nナゾナゾ姉妹と沈没船の秘密!",
            //     'console_id' => 2,
            //     'genre_id' => 2,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "ぼくのなつやすみ🄬4\n瀬戸内少年探偵団",
            //     'console_id' => 2,
            //     'genre_id' => 2,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "チャイルドオブライト",
            //     'console_id' => 2,
            //     'genre_id' => 2,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "FINAL FANTASY 零式",
            //     'console_id' => 2,
            //     'genre_id' => 4,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "FINAL FANTASY X",
            //     'console_id' => 2,
            //     'genre_id' => 4,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "ドラゴンクエストビルダーズ\nアルフガルドを復活せよ",
            //     'console_id' => 2,
            //     'genre_id' => 4,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "ドラゴンクエストヒーローズ2\n双子の王と予言の終わり",
            //     'console_id' => 2,
            //     'genre_id' => 4,
            //     'explanation' => 'a',
            // ],
            // [
            //     'name' => "空の軌跡FC",
            //     'console_id' => 2,
            //     'genre_id' => 4,
            //     'explanation' => 'a',
            // ],
            // 3→PlyaStationVR OculusQuest


            // 4→Xbox Series S


            // 5→NintendoSwitch


            // 6→NINTENDO 3DS


            // 7→PC


            // 8→その他

        ];
        DB::table('communities')->insert($communities);
    }
}
