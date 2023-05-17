<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedController extends Controller
{
    public function __construct() //! Asi se hace un constructor
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard',['user' => $user]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>['required','max:255'],
            'caption' => ['required'],
            'image' => ['required']
        ]);
    }

}
