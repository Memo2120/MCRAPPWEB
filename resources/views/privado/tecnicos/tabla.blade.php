@if (count($tecnicos) != 0)
<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        <h1>Tecnicos</h1>
        
        <table class="tabla">

            <thead class="">
                <th class="thcrdtecnom">Nombre</th> 
                <th class="thcrdteccant">apellido</th>
                <th class="thcrdtecdes">puesto</th>
                <th class="thcrdteccod">domicilio</th>
                <th class="thcrdtecimg">Imagen</th>
                <th class="thcrdtecest">zona</th>
                <th class="thcrdtecest">Estado</th>
                <th class="thcrdteccreat">Creado el</th>
                <th class="thcrdtecact">Actualizado el</th>
            </thead>
        </table>
        <br>

        @foreach ($tecnicos as $tecnico)
        <table class="tabla2" cellspacing="0">
            <tbody>
                <tr class="tr2">
                    <td class="tdcrdtecnom"><p class="pdes1">{{$tecnico->nombre}}</p></td>
                    <td class="tdcrdteccant">{{$tecnico->apellido}}</td>
                    <td class="tdcrdtecdes"><p class="pdes1">{{$tecnico->puesto}}</p></td>
                    <td class="tdcrdtecnom"><p class="pdes1">{{$tecnico->domicilio}}</p></td>
                    <td class="tdcrdtecimg"><img src="{{asset('img/tecnicos/'.$tecnico->imagenes)}}" alt="" width="60px" height="60px"></td>
                    <td class="tdcrdtecest"><p class="pdes1">{{$tecnico->zona}}</p></td>
                    <td class="tdcrdteccod"><p class="pdes1">{{$tecnico->estado}}</p></td>
                    <td class="tdcrdteccreat"><p class="pdes1">{{$tecnico->created_at}}</p></td>
                    <td class="tdcrdtecact"><p class="pdes1">{{$tecnico->updated_at}}</p></td>
                    <td href="" class="tdbtnbor">
                        <button class="btnborrar"><a href="{{asset('removeTecnicos/'.$tecnico->id)}}">Borrar</a></button>
                        <button class="btnmodificar"  onclick="obtenerDatos('{{asset('editTecnicos/'.$tecnico->id)}}', '{{asset('updateTecnicos/'.$tecnico->id)}}'); " >Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>
@else
    <h1>No hay tecnicos</h1>
@endif