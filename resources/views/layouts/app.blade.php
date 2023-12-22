<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap">
        <title>{{ config('app.name', 'C3585124: AWE Component 2') }}</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/my.js') }}" defer></script>
    </head>
    <body>
    <header class = "flex justify-between border-bottom-double border-2">
        <div class = "flex flex-col items-start border-2 rounded-lg m-5">            
            <img src="{{asset('images/logo.png')}}" alt="logo"  style="width:200px;" class="self-center">
            <h2 class = "font-bold text-lg self-center px-2">AWE COMPONENT 2</h2>
        </div>  
        <div>
        @auth
            @include('layouts.settings_dropdown') 
        @endauth
        @guest
         <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
          @if (Route::has('register'))
               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif  
        @endguest
        </div>
    </header>
    <main class="border-bottom-double border-2">
    <!-- Main Content -->
    @include('layouts.menu')   

    {{$slot ?? ''}}
    <div class="mb-8">

    </main>
    <footer>
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
    </body>
</html>