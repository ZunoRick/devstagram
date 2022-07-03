@extends('layouts.app')

@section('titulo')
  Editar Perfil: {{ auth()->user()->username }}
@endsection

@section('contenido')
  <div class="md:flex justify-center">
    <div class="md:w-1/2 bg-white shadow p-6">
      <form method="POST" action="{{ route('perfil.store') }}" class="mt-10 md:mt-0" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
          <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
            Username
          </label>
          <input 
            type="text"
            id="username"
            name="username"
            placeholder="Tu Nombre de Usuario"
            class="border p-3 w-full rounded-lg @error('username')
              border-red-500
            @enderror"
            value="{{ auth()->user()->username }}"
          >

          @error('username')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
            Imagen Perfil
          </label>
          <input 
            type="file"
            id="imagen"
            name="imagen"
            class="border p-3 w-full rounded-lg"
            value=""
            accept=".jpg, .jpeg, .png, .webp"
          >
        </div>

        <div class="mb-5">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
            Nombre
          </label>
          <input 
            type="text"
            id="name"
            name="name"
            placeholder="Tu Nombre"
            class="border p-3 w-full rounded-lg @error('name')
              border-red-500
            @enderror"
            value="{{ auth()->user()->name }}"
          >

          @error('name')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
          @enderror
        </div>

        <p class="mt-2 text-gray-600">Para actualizar tu correo o contraseña es necesario ingresar tu contraseña actual</p>
        @if (session('mensaje'))
          <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
            {{ session('mensaje') }}
          </p>
        @endif
        <div class="mb-5">
          <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
            Email
          </label>
          <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
            class="border p-3 w-full rounded-lg @error('email')
            border-red-500
            @enderror"
            value="{{ auth()->user()->email }}"
          >
          @error('email')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
            Nuevo Password
          </label>
          <input 
            type="password"
            id="nuevo_password"
            name="nuevo_password"
            placeholder="Nuevo Password"
            class="border p-3 w-full rounded-lg @error('nuevo_password')
            border-red-500
            @enderror"
          >
          @error('nuevo_password')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
            Password
          </label>
          <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu Password de Registro"
            class="border p-3 w-full rounded-lg"
          >
        </div>

        <input 
          type="submit" 
          value="Guardar Cambios"
          class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
        />
      </form>
    </div>
  </div>
@endsection