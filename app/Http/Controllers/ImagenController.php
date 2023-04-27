<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = Str::uuid() . "." . $image->extension();

        $serverImage = Image::make($image);

        $serverImage->fit(500, 500);

        $routeImage = public_path('uploads') . '/' . $imageName;

        $serverImage->save($routeImage);

        return response()->json(['image'=>$imageName]);
    }
}
