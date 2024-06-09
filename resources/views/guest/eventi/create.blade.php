@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi un nuovo evento:
                </h1>

                <form action="{{ route('guest.eventi.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nome_evento" class="form-label">
                            Nome dell'evento:
                        </label>
                        <input type="text" name="nome_evento" id="nome_evento" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="data_evento">Seleziona una data</label>
                        <input id="data_evento" name="data_evento" class="form-control" type="date">
                    </div>

                    <button type="submit" class="btn btn-primary">Aggiungi un nuovo evento</button>
                    <button type="reset"  class="btn btn-danger">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection