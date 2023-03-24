@if (count($refacciones) != 0)
<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        <h1>Refacciones</h1>
        
        <table class="tabla">

            <thead class="">
                <th class="thtit">Nombre</th> 
                <th class="thdes">Cantidad</th>
                <th class="thdir">Descripcion</th>
                <th class="thzona">Imagen</th>
                <th class="thest">Estado</th>
                <th class="thest">Codigo</th>
                <th class="thcre">Creado el</th>
                <th class="thcre">Actualizado el</th>
            </thead>
        </table>
        <br>

        @foreach ($refacciones as $refaccion)
        <table class="tabla2" cellspacing="0">
            <tbody>
                <tr class="tr2">
                    <td class="tdtit">{{$refaccion->nombre}}</td>
                    <td class="tddes"><p class="pdes">{{$refaccion->cantidad}}</p></td>
                    <td class="tddir">{{$refaccion->descripcion}}</td>
                    <td class="tdzona1"><img src="{{asset('img/refacciones/'.$refaccion->imagenes)}}" alt="" height="100%"></td>
                    <td class="tdest">{{$refaccion->estado}}</td>
                    <td class="tdest">{{$refaccion->codigo}}</td>
                    <td class="tdcre">{{$refaccion->created_at}}</td>
                    <td class="tdcre">{{$refaccion->updated_at}}</td>
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