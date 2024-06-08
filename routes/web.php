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
//Mostra l'evento selezionato
Route::get('/eventi/{evento}', [GuestEventoController::class, 'show'])->name('guest.eventi.show');
