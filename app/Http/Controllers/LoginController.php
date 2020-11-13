<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect(route('articles.index'));
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function login()
    {
        return view('articles.login');
    }
}
