<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('name'); //ニックネームを保存するカラム
            $table->integer('residence_id')->nullable(); //居住地を保存するカラム
            $table->integer('birthplace_id')->nullable(); //出身地を保存するカラム
            // $table->string('birthday')->nullable(); //誕生日を保存するカラム
            $table->string('birth01')->nullable(); //誕生年を保存するカラム
            $table->string('birth02')->nullable(); //誕生月を保存するカラム
            $table->string('birth03')->nullable(); //誕生日を保存するカラム
            $table->integer('holiday_id')->nullable(); //休日を保存するカラム
            $table->integer('frequency_id')->nullable(); //頻度を保存するカラム
            $table->integer('console_id')->nullable();
            $table->integer('genre_id')->nullable();
            $table->string('game_code01')->nullable(); //各GAMEIDを保存するカラム
            $table->string('game_code02')->nullable(); //各GAMEIDを保存するカラム
            $table->string('chat_flag'); //チャットon,offを保存するカラム
            $table->string('introduction')->nullable(); //自己紹介を保存するカラム
            $table->string('image_path')->nullable(); // 画像のパスを保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
