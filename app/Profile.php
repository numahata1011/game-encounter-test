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
        'genres' => 'required',
        'console' => 'required',
        'frequency' => 'required',
        // 'game_code' => 'required',
        // 'residence' => 'required',
        // 'birthplace' => 'required',
        'chat_flag' => 'required',
        // 'introduction' => 'required',
    );

    // protected $fillable = [
    //     'name',
    //     'holiday',
    // ];

}
