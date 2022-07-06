@extends('layouts.app')

@section('titulo')
    Página Principal
@endsection

@section('contenido')
  @if ($posts->count())
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      @foreach ($posts as $post)
        <div>
          <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
            <img src="{{ asset('uploads') . '/' . $post->user->username . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
          </a>
        </div>
      @endforeach
    </div>

    <div class="my-10">
      {{ $posts->links() }}
    </div>
  @else
    <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay Posts, sigue a alguien para poder mostrar sus posts</p>
  @endif

    {{-- Otra forma de recorrer el arreglo
    @forelse ($post as $post)
      
    @empty
      
    @endforelse --}}
@endsection