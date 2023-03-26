<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('privado/usuarios/index')->with('usuarios', User::whereNotIn('estado', ['Inactivo'])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $requ)
    {
        //
        $usua = new User();
        $usua->name = $requ->input('name');
        $usua->tipo = $requ->input('tipo');
        $usua->password = \Hash::make($requ->input('password'));
        $usua->estado = 'Activo';

        $usua->save();

        return redirect()->action([UsersController::class, 'index']);

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
        $usua = User::find($id);
        // dd($usua);
        return $usua;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $requ, $id)
    {
        //
        $usua = User::find($id);
        $usua->name = $requ->input('name');
        $usua->tipo = $requ->input('tipo');
        // $usua->password = \Hash::make($requ->input('password'));
        $usua->estado = $requ->input('estado');

        $usua->save();
        return redirect()->action([UsersController::class, 'index']);
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
        $usua = User::find($id);
        $usua->estado = 'Inactivo';
        $usua->save();
        return redirect()->action([UsersController::class, 'index']);
    }
}
