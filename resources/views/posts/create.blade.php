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

            <form action="{{ route('Images.store') }}" method="POST" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center bg-gray-300"
                enctype="multipart/form-data">
                @csrf
            </form>

        </div>
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('Feed.store') }}" method="POST">
                @method('Post')
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="Title">Title</label>
                    <input class="border w-full p-1 rounded-lg @error('Title') border-red-500 @enderror" type="text"
                        name="Title" id="Title" value="{{ old('Title') }}">
                    @error('title')
                        <p class="text-red-600 font-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block font-bold" for="Caption">Caption</label>
                    <textarea class="border w-full p-1 rounded-lg @error('Caption') border-red-500 @enderror" type="text" name="Caption"
                        id="Caption">{{ old('Caption') }}</textarea>
                    @error('caption')
                        <p class="text-red-600 font-bold">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <input type="hidden" name="image" value="{{ old('image') }}">
                    @error('image')
                        <p class="text-red-700 my-2 "></p>
                        {{ $message }}
                    @enderror
                </div>

                <input class="hover:bg-sky-700 cursor-pointer w-full bg-sky-600 text-white p-2 rounded-lg" type="submit"
                    value="Post">
            </form>
        </div>
    @endsection
