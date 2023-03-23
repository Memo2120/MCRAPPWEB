@extends('privado/master')

@section('css')
<link rel="stylesheet" href="{{asset('css/overlayCRUD.css')}}">
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
                        document.getElementById("titulo").value = datos.titulo;
                        document.getElementById("descripcion").value = datos.descripcion;
                        document.getElementById("direccion").value = datos.direccion;
                        document.getElementById("zona").value = datos.zona;
                        document.getElementById("estado").value = datos.estado;
                        
                        document.getElementById("formModificar").action = urlAction;
                        

                        on("1");
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
    @include('privado/tickets/soliTickets')
    @include('privado/tickets/noSoliTickets')
    @include('privado/tickets/layoutModificar')
@endsection