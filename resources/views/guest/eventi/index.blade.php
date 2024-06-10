@extends('layouts.app')

@section('main-content')
<div class="container">
    <h1>Eventi disponibili</h1>
    <a href="{{ route('guest.eventi.create') }}">Crea nuovo evento</a>
    <div class="row">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                @foreach($eventi as $evento)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                                <a href="{{ route('guest.eventi.show', $evento->id) }}">{{ $evento->nome_evento }}</a>
                                <p>
                                    {{ $evento->data_evento }}
                                </p>
                        </div>
                    </div>
                    
                </div>
                    
                @endforeach
        </div>
        
    </div>
</div>

@endsection