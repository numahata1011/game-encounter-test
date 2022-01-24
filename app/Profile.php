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
        // 'holiday' => 'required',
        // 'genres' => 'required',
        // 'console' => 'required',
        // 'frequency' => 'required',
        // 'game_code' => 'required',
        // 'residence' => 'required',
        // 'birthplace' => 'required',
        'chat_flag' => 'required',
        // 'introduction' => 'required',
    );

    public function genre_checkd($value) {
        $arr = explode(',', $this->genre_ids);
        return in_array($value, $arr, false);
    }

    // protected $fillable = [
    //     'name',
    //     'holiday',
    // ];

}
