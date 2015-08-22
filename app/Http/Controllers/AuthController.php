<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

use Auth;
use Validator;

class AuthController extends Controller
{
    public function signUp()
    {
        return view('auth.sign-up');
    }

    public function signIn()
    {
        return view('auth.sign-in');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($request->only('username', 'password'))) {
            return redirect()->back()->withInput()->withErrors([
                'auth' => ['Invalid credentials.'],
            ]);
        }

        return redirect('/');
    }

    public function postSignUp(Request $request)
    {
        $rules = [
            'username' => ['required', 'unique:users'],
            'password' => ['required', 'min:6'],
        ];

        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $user = User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
