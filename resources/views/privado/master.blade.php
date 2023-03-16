<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
    @yield('scriptsArriba')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
</head>
<body>
    
    @include('privado/navbar')
    <div class="divp">
        @yield('content')
    </div>

    @include('privado/footer')

    @yield('scriptsAbajo')
