@if (@auth()->user()->tipo=='Master')
@extends('privado/master')

@section('css')
<link rel="stylesheet" href="{{asset('css/overlayCRUD.css')}}">
<style>
    .row {
        margin-left:-5px;
        margin-right:-5px;
    }
    
    .column {
        float: left;
        width: 17%;
        padding: 5px;
    }
</style>
@endsection

@section('scriptsAbajo')
<script src="{{asset('js/overlayCRUD.js')}}"></script>
@endsection

@section('content')
    
    @include('privado/CRUDS/content/botones')
    @include('privado/CRUDS/content/top5TodasTablas')
   
    @include('privado/CRUDS/refaccionesCRUD')
    @include('privado/CRUDS/usersCRUD')
    @include('privado/CRUDS/soliTicketsCRUD')
    @include('privado/CRUDS/tecnicosCRUD')
    @include('privado/CRUDS/ticketsCRUD')

@endsection
@else
    <h1 style="padding-left: 170px">Usted no es usuario permitido</h1>

@endif