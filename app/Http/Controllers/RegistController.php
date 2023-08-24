<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistController extends Controller
{
    public function index()
    {
        return view('regist', [
            'title' => 'regist'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
    
        // $request->session()->flash('success','Registration Success!!');

        return redirect('/login')->with('success','Registration Success!!');
    }
}