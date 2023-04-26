@extends('layouts.app')

@section('title')
    Sign in
@endsection

@section('content')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-full" src="{{asset('img/Image1.jpg')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login.store')}}" method="POST">
                @method('Post')
                @csrf
                @if (session('mensaje'))
                    <p class="border border-t-0 border-red-400 rounded-b bg-red-100 px-2 py-1 text-red-700">{{session('mensaje')}}</p>
                @endif
                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="username">Username</label>
                    <input class="border w-full p-1 rounded-lg @error('username') border-red-500 @enderror" type="text" name="username" id="username" value="{{old('username')}}">
                    @error('username')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="password">Password</label>
                    <input class="border w-full p-1 rounded-lg @error('password') border-red-500 @enderror" type="password" name="password" id="password" >
                    @error('password')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                    <div class="mt-4">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="text-gray-500 font-semibold">Remember me :)</label>
                    </div>
                </div>

                <input class="hover:bg-sky-700 cursor-pointer w-full bg-sky-600 text-white p-2 rounded-lg" type="submit" value="Sign in">



                
            </form>
        </div>
    </div>
@endsection
