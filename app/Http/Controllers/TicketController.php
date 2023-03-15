<?php

namespace App\Http\Controllers;

use App\Models\solicitud_ticket;
use App\Models\tecnico;
use App\Models\ticket;
use Illuminate\Http\Request;

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

        return view('privado//asignarTecnico/index')->with('ticket', ticket::find($id))
                                             ->with('tecnicos',$tecnicos);

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
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
