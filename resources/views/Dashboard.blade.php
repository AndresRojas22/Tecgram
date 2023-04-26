@extends('layouts.app')

@section('content')
    
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="md:w-8/12 lg:w-6/12 md:flex px-5">
                <img src="{{asset('Img/Profile.png')}}" alt="">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
               <p class="text-4xl">{{$user->username}}</p>
               <p class="text-gray-700 text-sm font-bold mt-5"> 0
                <span class="font-normal">Followers</span>
               </p>

               <p class="text-gray-700 text-sm font-bold mt-5"> 0
                <span class="font-normal">Following</span>
               </p>

               <p class="text-gray-700 text-sm font-bold mt-5"> 0
                <span class="font-normal">Posts</span>
               </p>

            </div>
        </div>
    </div>

@endsection