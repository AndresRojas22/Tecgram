@extends('layouts.app')

@section('title')
    Sign up on TecGram
@endsection

@section('content')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class="rounded-full" src="{{asset('img/Photo.jpg')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('account.store')}}" method="POST">
                @method('Post')
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="name">Full name</label>
                    <input class="border w-full p-1 rounded-lg @error('name') border-red-500 @enderror" type="text" name="name" id="name" value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                    
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="username">Username</label>
                    <input class="border w-full p-1 rounded-lg @error('username') border-red-500 @enderror" type="text" name="username" id="username" value="{{old('username')}}">
                    @error('username')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="Email">Email</label>
                    <input class="border w-full p-1 rounded-lg @error('email') border-red-500 @enderror" type="email" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="password">Password</label>
                    <input class="border w-full p-1 rounded-lg @error('password') border-red-500 @enderror" type="password" name="password" id="password" >
                    @error('password')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="password_confirmation">Confirm password</label>
                    <input class="border w-full p-1 rounded-lg @error('password') border-red-500 @enderror" type="password" name="password_confirmation" id="password_confirmation">
                </div>

                <input class="hover:bg-sky-700 cursor-pointer w-full bg-sky-600 text-white p-2 rounded-lg" type="submit" value="Sign up">



                
            </form>
        </div>
    </div>
@endsection
