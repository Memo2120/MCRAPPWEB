{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/overlayCRUD.css')}}">
</head>
<body> --}}
    <div id="overlay" {{--onclick="off()"--}}>
        <div class="fondo">
            <i style="color:white;" onclick="off()">&#10006;</i>
            <div class="card">
                <div class="bar-titulo">
                    <p>@yield('titulo-CRUD')</p>
                </div>
                <div class="campos">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
    <button onclick="on()">Turn on overlay effect</button>


    <script src="{{asset('js/overlayCRUD.js')}}"></script>
{{-- </body>
</html> --}}