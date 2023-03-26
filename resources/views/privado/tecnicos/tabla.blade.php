@if (count($tecnicos) != 0)
<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        <h1>Tecnicos</h1>
        
        <table class="tabla10">

            <thead class="">
                <th style="width: 10%" class="thcrdtecnom">Nombre</th> 
                <th style="width: 10%" class="thcrdteccant">apellido</th>
                <th style="width: 10%" class="thcrdtecdes">puesto</th>
                <th style="width: 10%" class="thcrdteccod">domicilio</th>
                <th style="width: 10%" class="thcrdtecimg">Imagen</th>
                <th style="width: 10%" class="thcrdtecest">zona</th>
                <th style="width: 10%" class="thcrdtecest">Estado</th>
                <th style="width: 10%" class="thcrdteccreat">Creado el</th>
                <th style="width: 10%" class="thcrdtecact">Actualizado el</th>
            </thead>
        </table>
        <br>

        @foreach ($tecnicos as $tecnico)
        <table class="tabla11" cellspacing="0">
            <tbody>
                <tr class="tr2">
                    <td style="width: 10%" class="tdcrdtecnom"><p class="pdes1">{{$tecnico->nombre}}</p></td>
                    <td style="width: 10%" class="tdcrdteccant"><p class="pdes1">{{$tecnico->apellido}}</p></td>
                    <td style="width: 10%" class="tdcrdtecdes"><p class="pdes1">{{$tecnico->puesto}}</p></td>
                    <td style="width: 10%" class="tdcrdtecndom"><p class="pdes1">{{$tecnico->domicilio}}</p></td>
                    <td style="width: 10%" class="tdcrdtecimg"><img src="{{asset('img/tecnicos/'.$tecnico->foto)}}" alt="" width="60px" height="60px"></td>
                    <td style="width: 10%" class="tdcrdtecest"><p class="pdes1">{{$tecnico->zona}}</p></td>
                    <td style="width: 10%" class="tdcrdteccod"><p class="pdes1">{{$tecnico->estado}}</p></td>
                    <td style="width: 10%" class="tdcrdteccreat"><p class="pdes1">{{$tecnico->created_at}}</p></td>
                    <td style="width: 10%" class="tdcrdtecact"><p class="pdes1">{{$tecnico->updated_at}}</p></td>
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