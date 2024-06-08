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
                                Regione: {{ $evento->data_evento }}
                            </p>
                            <!--
                            <div class="actions mb-3 pt-3 d-inline-block">
                                <a href="{{ route('guest.mills.edit', $mill->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questo mulino
                                    </button>
                                </a>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection