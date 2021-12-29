<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NiceController extends Controller
{
    //

    public function nicePartner() {
        return view('user.nice.nice_partner');
    }

    public function niceMe() {
        return view('user.nice.nice_me');
    }

}
