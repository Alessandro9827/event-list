<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persone = Persona ::all();
        //dd ($persone) ;
        return view('guest.persone.index', compact('persone'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.persone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $newPersonaData = $request->all();

        $newPersona = new Persona();
        $newPersona->nome = $newPersonaData['nome'];
        $newPersona->cognome = $newPersonaData['cognome'];

        $newPersona->save();
        return redirect()->route('guest.persone.show', $newPersona->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $persona = Persona::findOrFail($id);
        //dd($persona);
        return view('guest.persone.show', compact('persona'));
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
