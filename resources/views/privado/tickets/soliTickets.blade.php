@if (count($SolicitudTickets) != 0)
<h1>Solicitudes de tickets</h1>
<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        
        <table class="tabla">

            <thead class="">
                <th class="thtit{{--bg-blue-100 border text-left px-1 py-1--}}">Titulo</th> 
                <th class="thdes">Descripcion</th>
                <th class="thdir">Direccion</th>
                <th class="thzona">Zona</th>
                <th class="thest">Estado</th>
                {{-- <th class=>Correo</th>
                <th class=>Telefono</th> --}}
                {{-- <th class=>Tecnico Asignado</th> --}}
                {{-- <th class=>Solicitud de Ticket</th> --}}
                <th class="thcre">Creado el</th>
                {{-- <th >Actualizado el</th> --}}
            </thead>
        </table>
        <br>

        <table class="tabla2">
            <tbody>
            @foreach ($SolicitudTickets as $ticket)
                <tr class="tr2">
                    <td class="tdtit">{{$ticket->titulo}}</td>
                    <td class="tddes"><p class="pdes">{{$ticket->descripcion}}</p></td>
                    <td class="tddir">{{$ticket->direccion}}</td>
                    <td class="tdzona">{{$ticket->zona}}</td>
                    <td class="tdest">{{$ticket->estado}}</td>
                    {{-- <td class="border px-1 py-1">{{$ticket->correo}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->telefono}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->tecnicoAsignado}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->id_solicitudTicket}}</td> --}}
                    <td class="tdcre">{{$ticket->created_at}}</td>
                    {{-- <td class="border px-1 py-1">{{$ticket->updated_at}}</td> --}}
                    <td href="" class="tdbtnbor"><button class="btnborrar">Borrar</button></td>
                    <td href="" class="tdbtnmod"><button class="btnmodificar">Modificar</button></td>
                    <td href="" class=""><button class="btnas"><a class="alink" href="{{asset('/asigTechSoli/'.$ticket->id)}}">Asignar Tecnico</a></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex-1"></div>
</div>
@else
    <h1>No hay solicitud de tickets</h1>
@endif



