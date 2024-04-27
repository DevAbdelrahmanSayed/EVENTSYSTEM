<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        return view('reset-password.resetPassword')->with(['token' =>$token]);
    }
    public function emailIndex()
    {
        return view('reset-password.reset-email');
    }
    public function sendResetLinkEmail(Request $request)
    {

        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            flash('Email does not exist.')->success();

            return back();
        }
        Mail::to($user->email)->send(new ResetPasswordMail($user, Password::createToken($user)));
        Auth::login($user);
        flash('Password reset email sent.')->success();

        return back();
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only( 'email','password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();

                Auth::login($user);
            }

        );
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Password has been reset successfully.');
        } else {
            return back()->with(['error' => [trans($status)]])->withInput();
        }
    }
}
