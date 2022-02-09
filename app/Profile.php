<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        // 'user_id' => 'required',
        'name' => 'required',
        'holiday' => 'required',
        // 'genres' => 'required',
        // 'console' => 'required',
        'frequency_id' => 'required',
        // 'game_code' => 'required',
        'chat_flag' => 'required',
        // 'introduction' => 'required',
    );

    public function console_checkd($value) {
        $arr = explode(',', $this->console_id);
        return in_array($value, $arr, false);
    }

    public function genre_checkd($value) {
        $arr = explode(',', $this->genre_id);
        return in_array($value, $arr, false);
    }

    public function holidaystr() {
        // 配列にする
        $arr = explode(',', $this->holiday_id);
        $str = '';
        foreach($arr as $id) {
            if ($id > 0 && $id != null && $id != '') {
            $str .= Holiday::find($id)->name . ' ';
            }
        }
        return $str;
    }

    public function consolestr() {
        $arr = explode(',', $this->console_id);
        $str = '';
        foreach($arr as $id) {
            if ($id > 0 && $id != null && $id != '') {
            // $str .= Console::find($id)->name . ' ';
            $str .= Console::find($id)->name . "\r\n";
            }
        }
        return $str;
    }

    public function genrestr() {
        $arr = explode(',', $this->genre_id);
        $str = '';
        foreach($arr as $id) {
            if ($id > 0 && $id != null && $id != '') {
            $str .= Genre::find($id)->name . "\r\n";
            }
        }
        return $str;
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    // Residence Modelに関連付けを行う
    public function residence() {
        return $this->belongsTo('App\Residence');
    }

    // Holiday Modelに関連付けを行う
    public function holidays() {
        return $this->hasMany('App\Holiday');
    }

    // Frequency Modelに関連付けを行う
    public function frequency() {
        return $this->belongsTo('App\Frequency');
    }

    // Console Modelに関連付けを行う
    public function consoles() {
        return $this->hasMany('App\Console');
    }

    // Genre Modelに関連付けを行う
    public function genres() {
        return $this->hasMany('App\Genre');
    }

}
