@if (count($NoSoliTickets) != 0)
<br>
<div class="div2">
    <h1>Tickets</h1>
    <div class=" flex-1">
    </div>
    {{-- <div class=""> --}}
        <table class="tabla3">
            <thead>
                <th class="thT{{--bg-blue-100 border text-left px-1 py-1--}}">Titulo</th>
                <th class="thDes">Descripcion</th>
                <th class="thDir">Direccion</th>
                <th class="thZ">Zona</th>
                <th class="thEst">Estado</th>
                {{-- <th class="">Correo</th> --}}
                {{-- <th class="">Telefono</th> --}}
                {{-- <th class="">Tecnico Asignado</th> --}}
                {{-- <th class="">Solicitud de Ticket</th> --}}
                <th class="thCre">Creado el</th>
                {{-- <th class="">Actualizado el</th> --}}
            </thead>
        </table>
<br>
        @foreach ($NoSoliTickets as $ticket)
        <table  class="tabla4" cellspacing="0">
            <tbody>
                <tr class="tr4">
                    <td class="tdT">{{$ticket->titulo}}</td>
                    <td class="tdDes"><p class="pDes">{{$ticket->descripcion}}</p></td>
                    <td class="tdDir">{{$ticket->direccion}}</td>
                    <td class="tdZ">{{$ticket->zona}}</td>
                    <td class="tdEst">{{$ticket->estado}}</td>
                    {{-- <td class="border px-1 py-1">{{$ticket->correo}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->telefono}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->tecnicoAsignado}}</td> --}}
                    {{-- <td class="border px-1 py-1">{{$ticket->id_solicitudTicket}}</td> --}}
                    <td class="tdCre">{{$ticket->created_at}}</td>
                    {{-- <td class="border px-1 py-1">{{$ticket->updated_at}}</td> --}}
                    <td href="" class="tdbtnbor">
                        <button class="btnborrar">Borrar</button>
                        <button class="btnmodificar">Modificar</button>
                        <button class="btnas"><a href="{{asset('/asigTech/'.$ticket->id)}}">Asignar Tecnico</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>
@else
<br><br>
    <h1>No hay tickets</h1>
@endif