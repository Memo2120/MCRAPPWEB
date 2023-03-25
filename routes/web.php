<?php

use App\Http\Controllers\SolicitudTicketController;
use App\Http\Controllers\sparePartsController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\tecnicosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\top5Controller;
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
Route::post('/crTicket', [TicketController::class, 'create']);
Route::get('/asigTech/{ticket}', [TicketController::class, 'show']);
Route::get('/modificarTicket/{id_ticket}', [TicketController::class, 'modificar']);
Route::post('/updateTicket/{id}', [TicketController::class, 'update']);
Route::get('/eraseTicket/{id}', [TicketController::class, 'destroy']);
Route::get('/asigTecnicoTicket/{ticket_id}/{tecnico_id}', [TicketController::class, 'asigTecnico']);

Route::get('/asigTechSoli/{ticket}', [SolicitudTicketController::class, 'show']);
Route::get('/modificarSoliTicket/{id_soliTicket}', [SolicitudTicketController::class, 'modificar']);
Route::post('/crSoliTicket', [SolicitudTicketController::class, 'create']);
Route::post('/updateSoliTicket/{id_soli}', [SolicitudTicketController::class, 'update']);
Route::get('/eraseSoliTicket/{id}', [SolicitudTicketController::class, 'destroy']);
Route::get('/asigTecnicoSoliTicket/{solicitud_id}/{tecnico_id}', [SolicitudTicketController::class, 'asigTecnico']);

Route::post('/crSparePart', [sparePartsController::class, 'create']);
Route::get('/showSpareParts', [sparePartsController::class, 'index']);
Route::post('/updateSpareParts/{id}', [sparePartsController::class, 'update']);
Route::get('/editSpareParts/{id}', [sparePartsController::class, 'edit']);
Route::get('/removeSpareParts/{id}', [sparePartsController::class, 'destroy']);

Route::post('/crUsuario', [UsersController::class, 'create']);
Route::get('/showUsuarios', [UsersController::class, 'index']);
Route::post('/updateUsuarios/{id}', [UsersController::class, 'update']);
Route::get('/editUsuarios/{id}', [UsersController::class, 'edit']);
Route::get('/removeUsuarios/{id}', [UsersController::class, 'destroy']);

Route::post('/crTecnico',[tecnicosController::class,'create']);
Route::get('/showTecnicos', [tecnicosController::class, 'index']);
Route::post('/updateTecnicos/{id}',[tecnicosController::class,'update']);
Route::get('/editTecnicos/{id}',[tecnicosController::class,'edit']);
Route::get('/removeTecnicos/{id}',[tecnicosController::class,'destroy']);

Route::view('/crudrefacciones','privado/refacciones/index');

// Route::view('btoones', 'privado/CRUDS/index');
Route::get('btoones', [top5Controller::class, 'allTop5']);





Route::get('/pruebaTop5Usuarios', [UsersController::class, 'topFive']);