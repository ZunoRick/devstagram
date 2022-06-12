<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
	public function store(Request $request)
	{
		//Crea una carpeta
		// public_path('uploads/' . auth()->user()->username . "/");
		if (!file_exists(public_path('uploads/' . auth()->user()->username . "/"))) {
			mkdir(public_path('uploads/' . auth()->user()->username . "/"), 0777, true);
		}

		//Manipula la imagen
		$imagen = $request->file('file');
		$nombreImagen = Str::uuid() . "." . $imagen->extension();
		$imagenServidor = Image::make($imagen);
		$imagenServidor->fit(1000, 1000);

		//Sube la imagen
		$imagenPath = public_path('uploads') . '/' . auth()->user()->username . "/" . $nombreImagen;
		$imagenServidor->save($imagenPath);
		
		return response()->json(['imagen' => $nombreImagen ]);
	}
}
