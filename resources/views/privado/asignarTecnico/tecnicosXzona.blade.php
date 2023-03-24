@if (count($tecnicos) != 0)
<br><br><br><br><br>
<h1>Tecnicos</h1>

<div class="div2">
    <div class=" flex-1">
    </div>
    {{-- <div class=""> --}}
        <table class="tabla3">
            <thead >
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">Nombre</th>
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">Apellido</th>
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">Puesto</th>
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">Zona</th>
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">Estado</th>
                <th style="width: 17%;" class="bg-blue-100 border text-left px-1 py-1">id_usuario</th>
            </thead>
        </table>
        <br>
        @foreach ($tecnicos as $tecnico)
        <table  class="tabla-tecnicos" cellspacing="0">
            <tbody>
                <tr class="tecnico">
                    <td class="datos-tabla-tecnicos" id="nom">{{$tecnico->nombre}}</td>
                    <td class="datos-tabla-tecnicos" id="ape">{{$tecnico->apellido}}</td>
                    <td class="datos-tabla-tecnicos" id="puesto">{{$tecnico->puesto}}</td>
                    <td class="datos-tabla-tecnicos" id="zona">{{$tecnico->zona}}</td>
                    <td class="datos-tabla-tecnicos" id="estado">{{$tecnico->estado}}</td>
                    <td class="datos-tabla-tecnicos" id="id">{{$tecnico->id_usuario}}</td>
                    <td href="" class="tdbtnbor">
                        @if($tipoTicket == "SoliTicket")
                            <button class="btnmodificar"><a href="{{asset('asigTecnicoSoliTicket/'.$ticket->id.'/'.$tecnico->id)}}">Seleccionar</a></button>                            
                        @elseif($tipoTicket == "Ticket")
                            <button class="btnmodificar"><a href="{{asset('asigTecnicoTicket/'.$ticket->id.'/'.$tecnico->id)}}">Seleccionar</a></button>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>
@else
<br><br><br><br><br>
<h1>No hay tecnicos en esta zona</h1>
@endif