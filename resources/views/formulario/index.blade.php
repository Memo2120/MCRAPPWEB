@extends('plantilla')

@section('css')
    <link rel="stylesheet" href="{{asset('css/mapa-zona.css')}}">
@endsection

@section('content')
    @include('formulario/content')
    @include('formulario/mapa')
@endsection