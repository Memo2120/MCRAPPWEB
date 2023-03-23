@extends('privado/master')

@section('css')
<link rel="stylesheet" href="{{asset('css/overlayCRUD.css')}}">
    
@endsection

@section('scriptsAbajo')
<script src="{{asset('js/overlayCRUD.js')}}"></script>
@endsection

@section('content')
    <div class="div_scroll">
        <select name="1" id="sel1">
            <option value="Refacciones" selected="selected" hidden>Refacciones</option>
            <option value="agregar"><button id="1" onclick="on(this.id)">Agregar</button></option>
            <option value="mostrar"><button onclick="mostrar">Mostrar</button></option>
        </select>
        
        <button id="2" onclick="on(this.id)">Solicitud Tickets</button>
        <button id="3" onclick="on(this.id)">Usuarios</button>
        <button id="4" onclick="on(this.id)">Tecnicos</button>
        <button id="5" onclick="on(this.id)">Tickets</button>
    </div>

    <div class="div_1">
        
        <button onclick="on">Agregar</button>
    </div>
    
    @include('privado/CRUDS/refaccionesCRUD')
    @include('privado/CRUDS/usersCRUD')
    @include('privado/CRUDS/soliTicketsCRUD')
    @include('privado/CRUDS/tecnicosCRUD')
    @include('privado/CRUDS/ticketsCRUD')

@endsection