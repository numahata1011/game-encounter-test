<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Profile;
use App\Console;
use App\Genre;
use App\Holiday;
use App\Frequency;
use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //

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


        // dd($form);

        // データベースに保存する
        $profile->fill($form);
        // dd($profile->toArray());
        $profile->user_id = Auth::id();
        $profile->holiday_id = $holiday_str;
        $profile->console_id = $console_str;
        $profile->genre_id = $genre_str;
        // dd($profile->toArray());

        $profile->save();
        // dd($profile->toArray());

        return redirect('profile');
    }

    public function edit(Request $request) {

        // Modelからデータを取得する
        $profiles = Profile::find($request->id);
        if (empty($profiles)) {
            abort(404);
        }

        return view('user.profile.profile_edit', ['profile_form => $profile']);
    }

    public function update(Request $request) {

        $this->validate($request, Profile::$rules);

        $profile = Profile::find($request->id);

        $profile_form = $request->all();
        unset($profile_form['_token']);

        $profile->fill($profile_form)->save();

        $profile_history = new ProfileHistory();
        $profile_history->profile_id = $profile->id;
        $profile_history->edited_at = Carbon::now();
        $profile_history->save();

        return redirect('user/profile');
    }

    public function index(Request $request) {

        $profiles = Profile::all();
        // $profiles = Profile::where()->get();

        // if(isset($_POST['holiday_ids']) && is_array($_POST['holiday_ids'])) {
        //     $holiday_ids = array(
        //         1=>'平日',
        //         2=>'土日',
        //         3=>'祝日',
        //     );
        //     $holiday_ids = implode(',', $_POST['holiday_ids']);

        // }



        // $frequency = array(
        //     1=>'気合いの毎日',
        //     2=>'休日にがっつり',
        //     3=>'マイペースに週1~2',
        // );

        return view('user.profile.profile', compact('profiles'));
    }

}
