@if (count($tecnicos) != 0)
<br><br><br><br><br>
<h1>Tecnicos</h1>
<section class="home-section">
    


<div class=" flex-1">
    <div></div>
</div>
<div class=" ">
    <table class="shadow-lg bg-white">
        <thead>
            <th class="bg-blue-100 border text-left px-1 py-1">Nombre</th>
            <th class="bg-blue-100 border text-left px-1 py-1">Apellido</th>
            <th class="bg-blue-100 border text-left px-1 py-1">Puesto</th>
            <th class="bg-blue-100 border text-left px-1 py-1">Zona</th>
            <th class="bg-blue-100 border text-left px-1 py-1">Estado</th>
            <th class="bg-blue-100 border text-left px-1 py-1">id_usuario</th>
        </thead>
        <tbody>
            @foreach ($tecnicos as $tecnico)
            <tr class="table-info">
                    <td>{{$tecnico->nombre}}</td>
                    <td >{{$tecnico->apellido}}</td>
                    <td >{{$tecnico->puesto}}</td>
                    <td >{{$tecnico->zona}}</td>
                    <td >{{$tecnico->estado}}</td>
                    <td >{{$tecnico->id_usuario}}</td>
                    <td href="" class="">Seleccionar</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex-1"></div>
</div>
@else
<br><br><br><br><br>
<h1>No hay tecnicos en esta zona</h1>
@endif
</section>