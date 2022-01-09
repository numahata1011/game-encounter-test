<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public static $rules = array(
        'user_id' => 'required',
        'name' => 'required',
        'frequency' => 'required',
        'game_code' => 'required',
        'residence' => 'required',
        'birthplace' => 'required',
        'holiday01' => 'required',
        'holiday02' => 'required',
        'holiday03' => 'required',
        'holiday' => 'required',
        'chat_flag' => 'required',
        'introduction' => 'required',

    );

    protected $fillable = [
        'holiday',
    ];
}
