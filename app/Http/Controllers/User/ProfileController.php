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
        $holidays=$form['holiday'];
        $holiday_str='';
        foreach ($holidays as $value) {
            # code...
            $holiday_str.= $value . ',';
        }

        // ゲーム機種を保存
        $consoles=$form['consoles'];
        $console_str='';
        foreach ($consoles as $value) {
            # code...
            $console_str.= $value . ',';
        }

        // ゲームジャンルを保存
        $genres=$form['genres'];
        $genre_str='';
        foreach ($genres as $value) {
            # code...
            $genre_str.= $value . ',';
        }
        // dd($str);

        // データベースに保存する
        $profile->fill($form);
        $profile->holiday=$holiday_str;
        $profile->console=$console_str;
        $profile->genre=$genre_str;
        // dd($profile);
        $profile->save();

        // profile/createにリダイレクト
        return redirect('profile/create');
    }

    public function edit() {
        return view('user.profile.profile_edit');
    }

}
