<?php

use App\Http\Controllers\SolicitudTicketController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('inicio');
});

Route::view('/registrarticket','RegistrarTicket/index')->name('registrar');
Route::view('/inicio','inicio/index')->name('inicio');
Route::view('/solicitudes','formulario/index')->name('solicitudes');

Route::view('/sesion', 'sesion/index');
Route::view('/solicitud', 'crudSolicitudTicket/index');
Route::view('/solicitarTicket', 'crudSolicitudTicket/index');

Route::post('/registrarSolicitud', [SolicitudTicketController::class, 'create']);

Route::get('/solicitudesAct', [SolicitudTicketController::class, 'show']);

Route::get('/ticketsNoAsignados', [TicketController::class, 'index']);
Route::get('/asigTech/{ticket}', [TicketController::class, 'show']);
Route::get('/asigTechSoli/{ticket}', [SolicitudTicketController::class, 'show']);

Route::view('btoones', 'privado/CRUDS/index');