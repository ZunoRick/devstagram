@extends('layouts.app')

@section('titulo')
  {{ $post->titulo }}
@endsection

@section('contenido')
  <div class="container mx-auto flex">
    <div class="md:w-1/2">
      <img src="{{ asset('uploads') . '/' . $user->username . '/' .$post->imagen }}" alt="Post {{ $post->titulo }}">

      <div class="p-3">
        <p>0 Likes</p>
      </div>

      <div>
        <p class="font-bold">{{ $user->username }}</p>

        <p class="text-sm text-gray-500">
          {{ $post->created_at->diffForHumans() }}
        </p>

        <p class="mt-5">
          {{ $post->descripcion }}
        </p>
      </div>
    </div>

    <div class="md:w-1/2">
      2
    </div>
  </div>
@endsection
