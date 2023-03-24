@extends('privado/master')

@section('css')
<link rel="stylesheet" href="{{asset('css/overlayCRUD.css')}}">
@endsection

@section('scriptsAbajo')
<script src="{{asset('js/overlayCRUD.js')}}"></script>
@endsection

@section('content')
    <div class="div_scroll">

                <div class="dropdown">
                        <button class="dropbtn">Refacciones</button>
                    <div class="dropdown-content">
                        <button style="min-width: 100%" id="1" onclick="on(this.id)">Agregar Refacciones</button>
                        <button style="min-width: 100%"><a href="{{asset('showSpareParts')}}">Mostrar refacciones</a></button>
                    </div>
                </div>

          

                <div class="dropdown">
                        <button class="dropbtn">Solicitud Tickets</button>
                    <div class="dropdown-content">
                        <button style="min-width: 100%" id="2" onclick="on(this.id)">Agregar Solicitud de Tickets</button>
                        <button style="min-width: 100%">Mostrar Solicitud de Tickets</button>
                    </div>
                </div>

        

                <div class="dropdown">
                        <button class="dropbtn">Usuarios</button>
                    <div class="dropdown-content">
                        <button style="min-width: 100%" id="3" onclick="on(this.id)">Agregar Usuarios</button>
                        <button style="min-width: 100%">Mostrar Usuarios</button>
                    </div>
                </div>



                <div class="dropdown">
                        <button class="dropbtn">Tecnicos</button>
                    <div class="dropdown-content">
                        <button style="min-width: 100%" id="4" onclick="on(this.id)">Agregar Tecnicos</button>
                        <button style="min-width: 100%">Mostrar Tecnicos</button>
                    </div>
                </div>



                <div class="dropdown">
                        <button class="dropbtn">Tickets</button>
                    <div class="dropdown-content">
                        <button style="min-width: 100%" id="5" onclick="on(this.id)">Agregar Tickets</button>
                        <button style="min-width: 100%">Mostrar Tickets</button>
                    </div>
                </div>

         
    </div>
<br>
<br>
<br>
<br>
<br>
    <div>
        <table>
            <tr>
                <td class="m1">Refacciones</td>
                <td class="m1">Solicitud de Tickets</td>
                <td class="m1">Usuarios</td>
                <td class="m1">Tecnicos</td>
                <td class="m1">Tickets</td>
            </tr>
            <tr>
                <td class="m1">1</td>
                <td class="m1">2</td>
                <td class="m1">3</td>
                <td class="m1">4</td>
                <td class="m1">5</td>
            </tr>
            <tr>
                <td class="m1">1</td>
                <td class="m1">2</td>
                <td class="m1">3</td>
                <td class="m1">4</td>
                <td class="m1">5</td>
            </tr>
        </table>
    </div>
   
    @include('privado/CRUDS/refaccionesCRUD')
    @include('privado/CRUDS/usersCRUD')
    @include('privado/CRUDS/soliTicketsCRUD')
    @include('privado/CRUDS/tecnicosCRUD')
    @include('privado/CRUDS/ticketsCRUD')

@endsection