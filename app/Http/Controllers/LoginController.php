<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.Login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required','regex:/^[a-zA-Z][a-zA-Z0-9]*$/'],
            'password' => ['required']
        ]);

        if(!auth()->attempt($request->only('username','password'),$request->remember))
        {
            return back()->with('mensaje','Credenciales incorrectas');
        }
        return redirect()->route('Feed.index', ['user' => $request->username]);
    }


}
