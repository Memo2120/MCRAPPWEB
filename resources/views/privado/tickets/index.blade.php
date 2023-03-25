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

                        if(datos.type == "soliTicket"){
                            let form = document.forms['formSoliTickets'];
                            console.log(datos);
                            form.elements["descripcion"].value = datos.descripcion;
                            form.elements["direccion"].value = datos.direccion;
                            form.elements["zona"].value = datos.zona;
                            form.querySelector('input[name="estado').value = datos.estado;
                            form.querySelector('select[name="estado').value = datos.estado;
                            // form.querySelector('#estado2').value = datos.estado;
                            form.elements["titulo"].value = datos.titulo;

                            // if(datos.correo){
                                form.elements["correo"].value = datos.correo;
                            // }
                            // if(datos.telefono){
                                form.elements["telefono"].value = datos.telefono;
                            // }
                            
                            document.getElementById("formSoliTickets").action = urlAction;
    
                            on("2");
                        }else{
                            let form = document.forms['formTickets'];
                            console.log(datos);
                            form.elements["descripcion"].value = datos.descripcion;
                            form.elements["direccion"].value = datos.direccion;
                            form.elements["zona"].value = datos.zona;
                            form.querySelector('input[name="estado"]').value = datos.estado;
                            form.querySelector('select[name="estado').value = datos.estado;
                            form.elements["tecnico-Asig"].value = datos.tecnicoAsignado;
                            form.elements["id_soliTicket"].value = datos.id_solicitudTicket;

                            // form.querySelector('#estado2').value = datos.estado;

                            // form.elements["estado"].value = datos.estado;
                            form.elements["titulo"].value = datos.titulo;

                            // if(datos.correo){
                                form.elements["correo"].value = datos.correo;
                            // }
                            // if(datos.telefono){
                                form.elements["telefono"].value = datos.telefono;
                            // }
                            
                            document.getElementById("formTickets").action = urlAction;
    
                            on("5");
                        }

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
    @include('privado/CRUDS/ticketsCRUD')
    @include('privado/CRUDS/soliTicketsCRUD')
    {{-- @include('privado/tickets/layoutModificar') --}}
@endsection