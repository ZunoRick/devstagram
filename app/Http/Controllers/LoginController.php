<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index()
	{
		// *Verifica que un usuario está autenticado
		if(auth()->check()){
			return redirect()->route('posts.index', auth()->user()->username);
		}
		return view('auth.login');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'email' => ['required', 'email'],
			'password' => ['required']
		]);

		if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
			return back()->with('mensaje', 'Credenciales Incorrectas');
		}

		return redirect()->route('posts.index', auth()->user()->username);
	}
}
