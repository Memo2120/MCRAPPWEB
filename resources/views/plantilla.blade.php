@include('head')


 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">


    @include('inicio.navbar')
    
    @yield('content')

    @include('/footer')