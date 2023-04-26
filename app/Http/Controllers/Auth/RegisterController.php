<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.Register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','max:50'],
            'username' => ['required','min:3','max:10','unique:users', 'regex:/^[a-zA-Z][a-zA-Z0-9]*$/'],
            'email' => ['required', 'email','unique:users', 'max:60'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::lower($request->username), //Str::lower sirve para hacer minusculas los datos
            'email' => $request->email,
            'password' => Hash::make($request->password) //Hash es para encriptar el dato o la contrasena en este caso
        ]);

        auth()->attempt([ //Valida la informacion ingresada para un inicio de sesion y mantenga los datos durante la sesion
            'username'=>$request->username,
            'password'=>$request->password
        ]);

        return redirect()->route('Feed.index');
    }
}
