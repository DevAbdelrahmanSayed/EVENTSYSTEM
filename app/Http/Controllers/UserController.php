<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {

    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        flash('Logged out successfully.')->success();
        return redirect()->route('login');
    }
}
