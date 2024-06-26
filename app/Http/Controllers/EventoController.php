<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventi = Evento ::all();
        //dd ($eventi) ;
        return view('guest.eventi.index', compact('eventi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.eventi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newEventoData = $request->all();

        $newEvento = new Evento();
        $newEvento->nome_evento = $newEventoData['nome_evento'];
        $newEvento->data_evento = $newEventoData['data_evento'];

        $newEvento->save();
        return redirect()->route('guest.eventi.show', $newEvento->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        //dd($evento);
        return view('guest.eventi.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
