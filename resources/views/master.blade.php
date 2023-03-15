<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('css')
    @yield('jsArriba')
    <style>
        
	  .btnsesion{
        width: 80px;
        height: 50px;
        background-color: #212529;
        border-radius: 8px;
		text-decoration: auto ;
	  }

      .abtn{
        color: white;
        text-decoration: auto;
      }

      .admin{
        margin-left: 350px;
      }

    </style>
</head>
<body>
    
    @include('header/index')
    @yield('header')
    {{-- @include('banner') --}}

    @yield('content')

    @yield('jsAbajo')
    <br><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>