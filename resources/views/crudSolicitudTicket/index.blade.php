@extends('master')

@section('css')
<link rel="stylesheet" href="{{asset('css/crudSolicitudTicket.css')}}">
<style>

    button#enviar{
        background-color: rgb(85, 217, 215);
        border-color: black;
        color: black;
    }
    button#enviar:hover{
        background-color: rgb(56, 144, 142);
        transition: 0.5s background-color;
    }
    
    div#clarito{
        color: rgb(169, 169, 169);
    }

</style>
@endsection

@section('jsArriba')
@endsection

@section('content')

<div id="contenedor-form-solicitud">
    <form action="{{asset('/registrarSolicitud')}}" method="POST">
        @csrf
        <h2>Solicitud de servicio</h2>
        <p>Completa los campos para poder crear una solicitud de servicio</p>
        <br>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Telefono</label>
            <input type="number" id="telefono" name="telefono"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección particular</label>
            <input type="text" id="direccion" name="direccion"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="zona" class="form-label">Zona <div id="clarito">(elija la zona donde se encuentre su casa, o la mas cercana)</div></label>
            <select name="zona" id="zona"  class="form-control" required>
                <option value="">Selecciona una opcion</option>
                <option value="San Juan de Dios">San Juan de Dios</option>
                <option value="Tonala">Tonala</option>
                <option value="Tlajomulco">Tlajomulco</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo de su problema</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5" style="resize: none;" required></textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" required>Aceptar terminos y condiciones</label>
        </div>
        <button id="enviar" type="submit" class="btn btn-primary" style="">Enviar Solicitud</button>
    </form>

</div>
    
@endsection