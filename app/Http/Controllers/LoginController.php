<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentialsData = $request->validate([
                    'email' => 'required|email:dns',
                    'password' => 'required'
        ]);

        if(Auth::attempt($credentialsData)) {
            $request->session()->regenerate(); // regenerate in session is for prevent session fixation (hacking technique)
            return redirect()->intended('/mypost');
        }

        return back()->with('loginError','Login failed!!');

    }

}
