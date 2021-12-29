<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    //

    public function notice() {
        return view('user.notice.notice');
    }

    public function noticeNice() {
        return view('user.notice.notice_nice');
    }

    public function noticeChat() {
        return view('user.notice.notice_chat');
    }

}
