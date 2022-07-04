@extends('layouts.app')

@section('titulo')
  {{ $user->name }}
@endsection

@section('contenido')
  <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
      <div class="w-8/12 lg:w-6/12 px-5">
        <img class="rounded-full" src="{{ $user->imagen ? asset('perfiles').'/'.$user->username. '/'. $user->imagen : asset('img/usuario.svg') }}" alt="Imagen usuario">
      </div>

      <div class="md:w-8/12 md:items-start justify-center py-10 lg:w-6/12 px-5 flex flex-col items-center">
        
        <div class="flex items-center gap-2">
          <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
  
          @auth
            @if ($user->id === auth()->user()->id)
              <a href="{{ route('perfil.index') }}" class="text-gray-500 hover:text-gray-600 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
              </a>
            @endif
          @endauth
        </div>

        <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
          {{ $user->followers->count() }}
          <span class="font-normal">@choice('Seguidor|Seguidores', $user->followers->count()) </span>
        </p>
        <p class="text-gray-800 text-sm mb-3 font-bold">
          {{ $user->followings->count() }}
          <span class="font-normal">Siguiendo</span>
        </p>
        <p class="text-gray-800 text-sm mb-3 font-bold">
          {{ $user->posts->count() }}
          <span class="font-normal">Posts</span>
        </p>

        @auth  
          @if ($user->id !== auth()->user()->id)  
            {{-- Evalua si el perfil visitado ya se está siguiendo --}}
            @if ( !$user->siguiendo(auth()->user()) )
              <form 
                action="{{ route('users.folow', $user) }}" 
                method="POST"
                >
                @csrf
                <input 
                  type="submit"
                  class="bg-blue-600 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer"
                  value="Seguir"
                />
              </form>
            @else
              <form action="{{ route('users.unfolow', $user) }}" 
              method="POST">
                @csrf
                @method('DELETE')
                <input 
                  type="submit"
                  class="bg-red-600 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer"
                  value="Dejar de seguir"
                />
              </form>
            @endif
          @endif
        @endauth
      </div>
    </div>
  </div>

  <section class="container mx-auto mt-10">
    <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>

    @if ($posts->count())
      <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
          <div>
            <a href="{{ route('posts.show', ['post' => $post, 'user' => $user]) }}">
              <img src="{{ asset('uploads') . '/' . $user->username . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
            </a>
          </div>
        @endforeach
      </div>

      <div class="my-10">
        {{ $posts->links() }}
      </div>
    @else
      <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay publicaciones</p>
    @endif
  </section>
@endsection