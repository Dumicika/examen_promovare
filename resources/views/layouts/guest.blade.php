<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <header>
   <div id="nav">
      <ul>
         <li><div><a href="#home">Home</a></div></li>
         <div>|</div>
         <li><div><a href="#discount">Discount</a></div></li>
         <div>|</div>
         <li><div><a href="#about">Abous us</a></div></li>
      </ul>
    </div>
    </header>

    @yield('content')

    <footer mt-5 p-5 d-flex align-center justify-content-center bg-card>
        <div class="footer">        
        <p class="my-5 ">
            Examen de promovare Copyright © 2024 - All rights reserved || Sîrbu Dumitrița
            <br>
            sirbu.dumitrita@elev.cihcahul.md
        </p>
        </div>
        </footer>
</body>
</html>
