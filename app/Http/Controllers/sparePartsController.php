<?php

namespace App\Http\Controllers;

use App\Models\sparePart;
use Illuminate\Http\Request;

class sparePartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('privado/refacciones/index')
        ->with('refacciones', sparePart::whereNotIn('estado', ['Inactivo'])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        $refa = new sparePart();
        $refa->nombre = $req->input('name');
        $refa->cantidad = $req->input('cantidad');
        $refa->descripcion = $req->input('descripcion');

        if($foto_refaccion = $req->file('imagen')){
            $destino = 'img/refacciones';
            $origen = $foto_refaccion->getClientOriginalName();
            $foto_refaccion->move($destino, $origen); 
            $refa->imagenes = $origen;
        }else{
            $refa->imagenes = 'refaccionPlaceholder.jpg';
        }
        
        $refa->estado = 'Activo';
        $refa->codigo = $req->input('codigo');
        $refa->save();

        return redirect()->action([sparePartsController::class, 'index']);
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
        $refa = sparePart::find($id);
        return $refa;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        $refa = sparePart::find($id);
        $refa->nombre = $req->input('name');
        $refa->cantidad = $req->input('cantidad');
        $refa->descripcion = $req->input('descripcion');

        if($foto_refaccion = $req->file('imagen')){
            $destino = 'img/refacciones';
            $origen = $foto_refaccion->getClientOriginalName();
            $foto_refaccion->move($destino, $origen); 
            $refa->imagenes = $origen;
        }
        // else{
        //     $refa->imagenes = 'refaccionPlaceholder.jpg';
        // }
        
        $refa->estado = $req->input('estado');
        $refa->codigo = $req->input('codigo');
        $refa->save();


        return redirect()->action([sparePartsController::class, 'index']);
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
        $refa = sparePart::find($id);
        $refa->estado = 'Inactivo';
        $refa->save();

        return redirect()->action([sparePartsController::class, 'index']);
    }
}
