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
}
