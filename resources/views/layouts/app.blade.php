<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>DevStagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="bg-gray-100">
      <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
          <h1 class="text-3xl font-black mb-3 md:mb-0">
            DevStagram
          </h1>

          @auth
            <nav class="flex flex-col gap-4 md:flex-row items-center">
              <a class="font-normal text-gray-600 text-sm" href="{{ route('posts.index', auth()->user()->username) }}">
                Hola:
                <span class="font-bold">
                  {{ auth()->user()->username }}
                </span>
              </a>

              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar Sesión</button>
              </form>
            </nav>
          @endauth

          @guest
            <nav class="flex flex-col gap-4 md:flex-row items-center">
              <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
              <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear Cuenta</a>
            </nav>
          @endguest

        </div>
      </header>
      
      <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
          @yield('titulo')
        </h2>
        @yield('contenido')
      </main>

      <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos Reservados
        {{ now()->year }}
      </footer>
    </body>
</html>