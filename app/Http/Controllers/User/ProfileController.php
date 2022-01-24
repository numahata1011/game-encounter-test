<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Console;
use App\Genre;

class ProfileController extends Controller
{
    //


    public function index() {
        return view('user.profile.profile');
    }

    public function add() {
        $consoles=Console::all();
        $genres=Genre::all();
        return view('user.profile.profile_create', compact('consoles', 'genres'));
    }

    public function create(Request $request) {
        // Varidationを行う
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $profile->image_path = basename($path);
        } else {
            $profile->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // 休日を保存
        $holiday_str = '';
        if ( isset($form['holiday']) ) {
            $holidays = $form['holiday'];
            // $holiday_str='';
            foreach ($holidays as $value) {
                # code...
                $holiday_str .= $value . ',';
            }
            unset($form['holiday']);
        } else {
            $profile->holiday  = null;
        }


        // $holidays=$form['holiday'];
        // $holiday_str='';
        // foreach ($holidays as $value) {
        //     # code...
        //     $holiday_str.= $value . ',';
        // }

        // ゲーム機種を保存
        $console_str = '';
        if ( isset($form['consoles']) ) {
            $consoles=$form['consoles'];
            // $console_str='';
            foreach ($consoles as $value) {
                # code...
                $console_str.= $value . ',';
            }
            unset($form['consoles']);
        } else {
            $profile->console = null;
        }

        // $consoles=$form['consoles'];
        // $console_str='';
        // foreach ($consoles as $value) {
        //     # code...
        //     $console_str.= $value . ',';
        // }

        // ゲームジャンルを保存
        $genre_str = '';
        if ( isset($form['genres']) ) {
            $genres=$form['genres'];
            // $genre_str='';
            foreach ($genres as $value) {
                # code...
                $genre_str.= $value . ',';
            }
            unset($form['genres']);
        } else {
            $profile->genre = null;
        }

        // $genres=$form['genres'];
        // $genre_str='';
        // foreach ($genres as $value) {
        //     # code...
        //     $genre_str.= $value . ',';
        // }

        // // 頻度を保存
        // $frequencys=$form['frequency'];
        // $frequency_str='';
        // foreach ($frequencys as $value) {
        //     # code...
        //     $frequency_str.= $value . ',';
        // }

        // dd($str);

        // データベースに保存する
        $profile->fill($form);
        $profile->holiday_ids = $holiday_str;
        $profile->console_ids = $console_str;
        $profile->genre_ids = $genre_str;
        // dd($profile);
        $profile->save();
        // dd($profile->toArray());

        // profile/createにリダイレクト
        return redirect('profile/create');
    }

    public function edit() {
        return view('user.profile.profile_edit');
    }

}
