<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');

    }
    public function __invoke(LoginRequest $request)
    {
        if (Auth::attempt($request->only('un_id', 'password'))) {
            $request->session()->regenerate();
            flash('You have logged in successfully As ' . Auth::user()->type)->success();
            return response()->json(['redirectTo' => route('dashboard.index')]);
        }
        flash('The provided credentials do not match our records.')->error();

        return response()->json(['errors' => ['all_errors' => ['The provided credentials do not match our records.']]], 422);
    }
}
