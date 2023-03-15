<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
    @yield('scriptsArriba')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    @include('privado/navbar')
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>

    @include('privado/footer')

    @yield('scriptsAbajo')
