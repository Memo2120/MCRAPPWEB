
<h1 style="width: 1300px; text-align:center;">Ultimos registros</h1>
<br>
<div class="row">
        <div class="column">
            <table class="tablesTop5">
            <tr>
                <th class="m1">Refacciones</th>
            </tr>
            @foreach ($refaccionesTop as $refaccion)
                <tr>
                    <td>{{$refaccion->nombre}}</td>
                </tr>
            @endforeach
        </table>
        </div>

        <div class="column">
            <table class="tablesTop5">
                <tr>
                    <th class="m1">Solicitud de Tickets</th>
                </tr>
                @foreach ($SoliTicketsTop as $soliTicket)
                    <tr>
                        <td>{{$soliTicket->titulo}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="column">
            <table class="tablesTop5">
                <tr>
                    <th class="m1">Usuarios</th>
                </tr>
                @foreach ($usersTop as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>


        <div class="column">
            <table class="tablesTop5">
                <tr>
                    <th class="m1">Tecnicos</th>
                </tr>
                @foreach ($tecnicosTop as $tecnico)
                    <tr>
                        <td>{{$tecnico->nombre}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        
        <div class="column">
            <table class="tablesTop5">
                <tr>
                    <th class="m1">Tickets</th>
                </tr>
                @foreach ($ticketsTop as $ticket)
                    <tr>
                        <td>{{$ticket->titulo}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>