<section class="divticketasignar">


<table class="tablaasignartecnico">
    <tr class="">
        <td style="text-align:center" colspan="1" class="thtitulo"> <strong>Titulo:</strong>    {{$ticket->titulo}}</td>
        <td style="text-align:center" colspan="4" class=""> <strong>Telefono:</strong>   {{$ticket->telefono}}</td>
    </tr>
    <tr>
        <td style="text-align:center" colspan="1" class=""> <strong>Creado el:</strong>     {{$ticket->created_at}}</td>
        <td style="text-align:center" colspan="4" class=""> <strong>Correo:</strong>        {{$ticket->correo}}</td>
    </tr>

    <tr><td colspan="4" style="text-align:center"  class="thdescripcion"> <strong>Descripcion</strong></td></tr>
    <tr><td colspan="4" class="tddescripcion"><p id="pdescripcion">{{$ticket->descripcion}}</p></td></tr>  
    

    <tr >
        <td colspan="1" style="text-align:center" class=""> <strong>Direccion:</strong>      {{$ticket->direccion}}</td>
        <td colspan="2" style="text-align:center" class=""> <strong>Zona:</strong>           {{$ticket->zona}}</td>
        <td colspan="2" style="text-align:center" class=""> <strong>Estado:</strong>         {{$ticket->estado}}</td>
    </tr>

    <tr>
        <td colspan="1" style="text-align:center" class=""> <strong>Tecnico Asignado:</strong>       {{$ticket->tecnicoAsignado}}</td>
        <td colspan="2" style="text-align:center" class=""> <strong>Solicitud de Ticket:</strong>    {{$ticket->id_solicitudTicket}}</td>
        <td colspan="2" style="text-align:center" class=""> <strong>Actualizado el:</strong>         {{$ticket->updated_at}}</td>
    </tr>

    <!-- <tr>
        <td href="" class="">Borrar</td>
        <td href="" class="">Modificar</td>
    </tr> -->
</table>


</section>