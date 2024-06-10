@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <a href="{{ route('guest.eventi.index') }}">Eventi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <a href="{{ route('guest.persone.index') }}">Persone</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div>
        @yield('content')
    </div>
@endsection