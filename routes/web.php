<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController as GuestEventoController;
use App\Http\Controllers\PersonaController as GuestPersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Mostra la homepage
Route::get('/', function () { return view('pages.home');})->name('pages.home');

//Mostra tutti gli eventi
Route::get('/eventi', [GuestEventoController::class, 'index'])->name('guest.eventi.index');

//Form per creare un evento
Route::get('/eventi/create', [GuestEventoController::class, 'create'])->name('guest.eventi.create');
Route::post('/eventi', [GuestEventoController::class, 'store'])->name('guest.eventi.store');

//Mostra l'evento selezionato
Route::get('/eventi/{evento}', [GuestEventoController::class, 'show'])->name('guest.eventi.show');


//Mostra tutte le persone
Route::get('/persone', [GuestPersonaController::class, 'index'])->name('guest.persone.index');

//Form per creare una persona
Route::get('/persone/create', [GuestPersonaController::class, 'create'])->name('guest.persone.create');
Route::post('/persone', [GuestPersonaController::class, 'store'])->name('guest.persone.store');

//Mostra la persona selezionata
Route::get('/persone/{persona}', [GuestPersonaController::class, 'show'])->name('guest.persone.show');