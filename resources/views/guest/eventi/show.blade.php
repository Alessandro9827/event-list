@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $evento->nome_evento }}
                            </h1>
                            <p>
                                Data evento: {{ $evento->data_evento }}
                            </p>
                            <h2>Partecipanti:</h2>
                            <ul>
                                @foreach($evento->persone as $persona)
                                    <li>{{ $persona->nome }} {{ $persona->cognome }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ route('guest.eventi.edit', $evento->id) }}">
                                Modifica evento
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection