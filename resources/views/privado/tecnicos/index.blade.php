@extends('privado/master')

@section('css')
<link rel="stylesheet"  href="{{asset('css/overlayCRUD.css')}}">
<link rel="stylesheet" media="(max-width: 800px)" href="{{asset('css/crud.css')}}">
@endsection

@section('scriptsArriba')
    <script>
        function obtenerDatos(url, urlAction){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    try {
                        var datos = JSON.parse(this.responseText);
                        console.log(datos);
                        document.getElementById("name").value = datos.nombre;
                        document.getElementById("apellido").value = datos.apellido;
                        document.getElementById("puesto").value = datos.puesto;
                        document.getElementById("domicilio").value = datos.domicilio;
                        document.getElementById("zona").value = datos.zona;
                        document.getElementById("estado").value = datos.estado;

                        document.getElementById("formTecnicos").action = urlAction;

                        on("4");
                    } catch (error) {
                        console.log(error);
                    }
                }
            };
            // let url = "{{--{{asset('/modificarSoliTicket/'.algunaVariableQueIniqueElId)}}--}}";
            xhttp.open("GET", url, true);
            xhttp.send();
        }


    </script>
@endsection

@section('scriptsAbajo')
    <script src="{{asset('js/overlayCRUD.js')}}"></script>
@endsection

@section('content')
    @include('privado/tecnicos/tabla')
    @include('privado/CRUDS/tecnicosCRUD')
@endsection