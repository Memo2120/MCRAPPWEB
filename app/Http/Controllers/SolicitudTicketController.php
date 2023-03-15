<?php

namespace App\Http\Controllers;

use App\Models\solicitud_ticket;
use App\Models\tecnico;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SolicitudTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $sT = new solicitud_ticket();
        $sT->titulo = $request->input('titulo');
        $sT->descripcion = $request->input('descripcion');
        $sT->direccion = $request->input('direccion');
        $sT->zona = $request->input('zona');
        $sT->estado = 'Activo';
        $sT->correo = $request->input('email');
        $sT->telefono = $request->input('telefono');

        $sT->save();

        return view('inicio/index')->with('exito', 'Se ha registrado su solicitud, revise su correo para la confirmacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request = null)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ticket = solicitud_ticket::find($id);
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

        return view('privado/asignarTecnico/index')->with('ticket', solicitud_ticket::find($id))
                                             ->with('tecnicos',$tecnicos);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(solicitud_ticket $solicitud_ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitud_ticket $solicitud_ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitud_ticket $solicitud_ticket)
    {
        //
    }



    //estas funciones no pertenecen a la solicitud de tickets, son funciones que me ayudan a generar las tablas de el dashboard
    //las pasare a otro controlador
    //...talvez xd
    public function alltables(){
        $tables = DB::select('show tables');

        dd($tables);
    }
}
