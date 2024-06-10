@extends('layouts.app')
    @section('main-content')
    <div class="container">
        <h1>Persone registrate</h1>
        <a href="{{ route('guest.persone.create') }}">Aggiungi persona</a>
        <div class="row">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach($persone as $persona)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                    <a href="{{ route('guest.persone.show', $persona->id) }}">{{ $persona->nome }}</a>
                                    <p>
                                        {{ $persona->cognome }}
                                    </p>
                            </div>
                        </div>
                        
                    </div>
                        
                    @endforeach
            </div>
            
        </div>
    </div>

@endsection