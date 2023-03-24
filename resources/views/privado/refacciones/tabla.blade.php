@if (count($refacciones) != 0)
<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        <h1>Refacciones</h1>
        
        <table class="tabla">

            <thead class="">
                <th class="thcrdrefnom">Nombre</th> 
                <th class="thcrdrefcant">Cantidad</th>
                <th class="thcrdrefdes">Descripcion</th>
                <th class="thcrdrefimg">Imagen</th>
                <th class="thcrdrefest">Estado</th>
                <th class="thcrdrefcod">Codigo</th>
                <th class="thcrdrefcreat">Creado el</th>
                <th class="thcrdrefact">Actualizado el</th>
            </thead>
        </table>
        <br>

        @foreach ($refacciones as $refaccion)
        <table class="tabla2" cellspacing="0">
            <tbody>
                <tr class="tr2">
                    <td class="tdcrdrefnom"><p class="pdes1">{{$refaccion->nombre}}</p></td>
                    <td class="tdcrdrefcant">{{$refaccion->cantidad}}</td>
                    <td class="tdcrdredes"><p class="pdes1">{{$refaccion->descripcion}}</p></td>
                    <td class="tdcrdrefimg"><img src="{{asset('img/refacciones/'.$refaccion->imagenes)}}" alt="" width="60px" height="60px"></td>
                    <td class="tdcrdrefest"><p class="pdes1">{{$refaccion->estado}}</p></td>
                    <td class="tdcrdrefcod"><p class="pdes1">{{$refaccion->codigo}}</p></td>
                    <td class="tdcrdrefcreat"><p class="pdes1">{{$refaccion->created_at}}</p></td>
                    <td class="tdcrdrefact"><p class="pdes1">{{$refaccion->updated_at}}</p></td>
                    <td href="" class="tdbtnbor">
                        <button class="btnborrar"><a href="{{asset('removeSpareParts/'.$refaccion->id)}}">Borrar</a></button>
                        <button class="btnmodificar"  onclick="obtenerDatos('{{asset('editSpareParts/'.$refaccion->id)}}', '{{asset('updateSpareParts/'.$refaccion->id)}}'); " >Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>
@else
    <h1>No hay refacciones</h1>
@endif