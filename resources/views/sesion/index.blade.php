@extends('master')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300…0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('jsArriba')
@endsection

@section('content')
    @include('sesion/logon')
@endsection

@section('jsAbajo')
    <script src="{{asset('js/login.js')}}"></script>
@endsection