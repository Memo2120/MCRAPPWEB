<?php

namespace App\Http\Controllers;

use App\Models\solicitud_ticket;
use App\Models\tecnico;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('privado/tickets/index')->with('NoSoliTickets', ticket::where('estado', 'Activo')->get())
                                             ->with('SolicitudTickets', solicitud_ticket::where('estado', 'Activo')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $ticket = ticket::find($id);
        $tecnicos = tecnico::where('zona', $ticket->zona)->where('estado', 'Activo')->get();
        // dd(json_decode($tecnicos));
        $tecnicos = json_decode($tecnicos);
        usort($tecnicos,function ($a, $b) {
            if ($a == '0000-00-00')
                return 1;

            if ($b == '0000-00-00')
                return -1;

            if ($a == $b)
                return 0;

            return ($a < $b) ? -1 : 1;
        });
        // dd($tecnicos);
        $tipoTicket = 'Ticket';
        return view('privado//asignarTecnico/index')->with('ticket', ticket::find($id))
                                                    ->with('tecnicos',$tecnicos)
                                                    ->with('tipoTicket', $tipoTicket);

    }

    public function modificar($id_ticket){
        
        $ticket = ticket::find($id_ticket);
        $ticket->type = 'ticket';
        return $ticket;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket, $id)
    {
        //
        $ticket = ticket::find($id);
        $ticket->titulo = $request->input('titulo');
        $ticket->descripcion = $request->input('descripcion');
        $ticket->direccion = $request->input('direccion');
        $ticket->zona = $request->input('zona');
        $ticket->estado = $request->input('estado');
        $ticket->save();

        return redirect()->action([TicketController::class, 'index']);
    }

    public function asigTecnico($ticket_id, $tecnico_id){
        $ticket = ticket::find($ticket_id);
        $ticket->estado = 'Pendiente';
        $ticket->tecnicoAsignado = $tecnico_id;
        $ticket->save();

        return redirect()->action([TicketController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket, $id)
    {
        //
        $ticket = ticket::find($id);
        $ticket->estado = 'Inactivo';
        $ticket->save();

        return redirect()->action([TicketController::class, 'index']);
    }
}
