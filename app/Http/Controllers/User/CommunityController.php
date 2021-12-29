<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommunityController extends Controller
{
    //

    public function add() {
        return view('user.community.community');
    }

    public function index() {
        // bladeファイルを読み込む
        return view('user.community.community');
    }

    // ジャンルページを読み込む
    public function comPs() {
        return view('user.community.community_genre');
    }

    public function comPsv() {
        return view('user.community.community_genre');
    }

    public function comVr() {
        return view('user.community.community_genre');
    }

    public function comXbox() {
        return view('user.community.community_genre');
    }

    public function comSwitch() {
        return view('user.community.community_genre');
    }

    public function comDs() {
        return view('user.community.community_genre');
    }

    public function comPc() {
        return view('user.community.community_genre');
    }

    public function comOther() {
        return view('user.community.community_genre');
    }

    // public function comPs() {
    //     return view('user.community.community_ps');
    // }

    // public function comPsv() {
    //     return view('user.community.community_psv');
    // }

    // public function comVr() {
    //     return view('user.community.community_vr');
    // }

    // public function comXbox() {
    //     return view('user.community.community_xbox');
    // }

    // public function comSwitch() {
    //     return view('user.community.community_switch');
    // }

    // public function comDs() {
    //     return view('user.community.community_3ds');
    // }

    // public function comPc() {
    //     return view('user.community.community_pc');
    // }

    // public function comOther() {
    //     return view('user.community.community_other');
    // }

    // public function comPsGenre() {
    //     return view('user.community.community_ps_genre');
    // }

}
