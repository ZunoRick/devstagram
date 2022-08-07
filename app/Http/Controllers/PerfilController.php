<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{   
	public function __construct() 
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('perfil.index');
	}

	public function store(Request $request)
	{	
		// Modificar el Request
		$request->request->add(['username' => Str::slug($request->username)]);

		$this->validate($request, [
			'username' => ['required', 'unique:users,username,'.auth()->user()->id, 'min:3', 'max:20', 
			'not_in:twitter,editar-perfil'],
			'name' => ['required','max:30'],
			'email' => ['required', 'unique:users,email,'.auth()->user()->id, 'email', 'max:60'],
			'nuevo_password' => ['nullable','min:6']
		]);

		if($request->email !== auth()->user()->email || $request->nuevo_password){
			if(!auth()->attempt( ['email' => auth()->user()->email, 'password'=> $request->password] )){
				return back()->with('mensaje', 'Credenciales Incorrectas');
			}
		}

		if ($request->username === auth()->user()->username) {
			if (file_exists(public_path('uploads/' . auth()->user()->username . "/"))) {
				rename (public_path('uploads/' . auth()->user()->username . "/"), public_path('uploads/' . $request->username . "/" ));
			}
			if (file_exists(public_path('perfiles/' . auth()->user()->username . "/"))) {
				rename (public_path('perfiles/' . auth()->user()->username . "/"), public_path('perfiles/' . $request->username . "/" ));
			} else {
				mkdir(public_path('perfiles/' . $request->username . "/"), 0777, true);
			}
		}

		if ($request->imagen) {	
			//Manipula la imagen
			$imagen = $request->file('imagen');
			$nombreImagen = Str::uuid() . "." . $imagen->extension();
			$imagenServidor = Image::make($imagen);
			$imagenServidor->fit(1000, 1000);
	
			//Sube la imagen
			$imagenPath = public_path('perfiles') . '/' . $request->username . "/" . $nombreImagen;
			$imagenServidor->save($imagenPath);
		}

		$usuario = User::find(auth()->user()->id);
		$usuario->username = $request->username;
		$usuario->imagen = $nombreImagen ?? auth()->user()->imagen ?? '';
		$usuario->name = $request->name;
		$usuario->email = $request->email;
		$usuario->password = Hash::make($request->nuevo_password) ?? auth()->user()->password;
		$usuario->save();

		//Redireccionar
		return redirect()->route('posts.index', $usuario->username);
	}
}
