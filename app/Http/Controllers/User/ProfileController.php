<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //

    public function index() {
        return view('user.profile.profile');
    }

    public function create() {
        return view('user.profile.profile_create');
    }

    public function edit() {
        return view('user.profile.profile_edit');
    }

}
