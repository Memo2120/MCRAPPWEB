@extends('privado/master')

@section('scriptsArriba')
    <script>
        function obtenerDatos(url){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    try {
                        var datos = JSON.parse(this.responseText);
                        console.log(datos);
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

@section('content')
    @include('privado/tickets/soliTickets')
    @include('privado/tickets/noSoliTickets')
@endsection