@extends('layouts.app')

@section('title')
    Crear nueva publicacion
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center">
        <div class="md: w-1/2 px-10">
            
            <form action="{{route('Images.store')}}" method="POST" id="dropzone" class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center bg-gray-300" enctype="multipart/form-data">
                @csrf
            </form>

        </div>
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="POST">
                @method('Post')
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="Title">Title</label>
                    <input class="border w-full p-1 rounded-lg @error('Title') border-red-500 @enderror" type="text" name="Title" id="Title" value="{{old('Title')}}">
                    @error('Title')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror    
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="Caption">Caption</label>
                    <textarea class="border w-full p-1 rounded-lg @error('Caption') border-red-500 @enderror" type="text" name="Caption" id="Caption">{{old('Caption')}}</textarea>
                    @error('Caption')
                    <p class="text-red-600 font-bold">{{$message}}</p>
                    @enderror
                    
                </div>

                <input class="hover:bg-sky-700 cursor-pointer w-full bg-sky-600 text-white p-2 rounded-lg" type="submit" value="Sign up">
            </form>
        </div>
@endsection