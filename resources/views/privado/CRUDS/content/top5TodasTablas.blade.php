
<h1>Ultimos registros</h1>
<br>
<div class="row">
        <div class="column">
            <table class="tablesTop5">
            <tr>
                <th class="m1">Refacciones</th>
            </tr>
            @foreach ($refacciones as $refaccion)
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
                @foreach ($SoliTickets as $soliTicket)
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
                @foreach ($users as $user)
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
                @foreach ($tecnicos as $tecnico)
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
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->titulo}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>