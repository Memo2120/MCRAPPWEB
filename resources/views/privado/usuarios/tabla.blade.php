@if (count($usuarios) != 0)

<div class="">
    <div class=" flex-1">
    </div>
    <div class="Div1">
        <h1>Usuarios</h1>
        
        <table class="tabla">

            <thead class="">
                <th class="thcrdrefnom">Nombre</th> 
                <th class="thcrdusutipo">Tipo</th>
                <th class="thcrdusuest">Estado</th>
                <th class="thcrdusupsw" hidden>Password</th>
                <th class="thcrdusucreat">Creado el</th>
                <th class="thcrdusuact">Actualizado el</th>
            </thead>
        </table>
        <br>

        @foreach ($usuarios as $usuario)
        <table class="tabla2" cellspacing="0">
            <tbody>
                <tr class="tr2">
                    <td class="tdcrdusunom"><p class="pdes1">{{$usuario->name}}</p></td>
                    <td class="tdcrdusutipo"><p class="pdes1">{{$usuario->tipo}}</p></td>
                    <td class="tdcrdusuest"><p class="pdes1">{{$usuario->estado}}</p></td>
                    <td class="tdcrdusupsw" ><p class="pdes1">{{$usuario->password}}</p></td>
                    <td class="tdcrdusucreat"><p class="pdes1">{{$usuario->created_at}}</p></td>
                    <td class="tdcrdusuact"><p class="pdes1">{{$usuario->updated_at}}</p></td>
                    <td href="" class="tdbtnbor">
                        <button class="btnborrar"><a href="{{asset('removeUsuarios/'.$usuario->id)}}">Borrar</a></button>
                        <button class="btnmodificar"  onclick="obtenerDatos('{{asset('editUsuarios/'.$usuario->id)}}', '{{asset('updateUsuarios/'.$usuario->id)}}'); " >Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>

@else
    <h1>No hay usuarios</h1>
@endif