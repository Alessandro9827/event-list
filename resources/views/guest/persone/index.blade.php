@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($persone as $persona)
                        <div class="col">
                            <a href="{{ route('guest.persone.show', $persona->id) }}">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            Nome: {{ $persona->nome}}
                                        </p>
                                        <p class="text-uppercase">
                                            Cognome: {{ $persona->cognome}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection