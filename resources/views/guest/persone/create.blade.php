@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi una nuova persona:
                </h1>

                <form action="{{ route('guest.persone.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nome" class="form-label">
                            Nome:
                        </label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="cognome" class="form-label">
                            Cognome:
                        </label>
                        <input type="text" name="cognome" id="cognome" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Entra nella lista</button>
                    <button type="reset"  class="btn btn-danger">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection