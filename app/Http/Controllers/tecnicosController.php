<?php

namespace App\Http\Controllers;

use App\Models\tecnico;
use Illuminate\Http\Request;

class tecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('privado/tecnicos/index')
        ->with('tecnicos',tecnico::whereNotIn('estado',['Inactivo'])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        $tecnico = new tecnico();
        $tecnico->nombre = $req->input('name');
        $tecnico->apellido = $req->input('apellido');
        $tecnico->puesto = $req->input('puesto');
        $tecnico->domicilio = $req->input('domicilio');

        if($foto_tecnico = $req->file('imagen')){
            $destino = 'img/tecnicos';
            $origen = $foto_tecnico->getClientOriginalName();
            $foto_tecnico->move($destino, $origen); 
            $tecnico->foto = $origen;
        }else{
            $tecnico->foto = 'tecnico.png';
        }

        $tecnico->zona = $req->input('zona');
        $tecnico->estado = 'Activo';
        // $tecnico->nombre = $req->input('name');
        $tecnico->save();

        return redirect()->action([tecnicosController::class,'index']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tecnico = tecnico::find($id);
        return $tecnico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tecnico = tecnico::find($id);
        $tecnico->nombre = $request->input('name');
        $tecnico->apellido = $request->input('apellido');
        $tecnico->puesto = $request->input('puesto');
        $tecnico->domicilio = $request->input('domicilio');

        if($foto_tecnico = $request->file('imagen')){
            $destino = 'img/tecnicos';
            $origen = $foto_tecnico->getClientOriginalName();
            $foto_tecnico->move($destino, $origen); 
            $tecnico->foto = $origen;
        }else{
            $tecnico->foto = 'tecnico.png';
        }

        $tecnico->zona = $request->input('zona');
        $tecnico->estado = $request->input('estado');
        // $tecnico->nombre = $req->input('name');
        $tecnico->save();

        return redirect()->action([tecnicosController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tecnico = tecnico::find($id);
        $tecnico->estado = 'Inactivo';
        $tecnico->save();

        return redirect()->action([tecnicosController::class, 'index']);
    }
}
