@extends('app')
@section('main-content')
    <div class="container">
        <div class="row">
            <section class=" text-center px-3">
                <div class="card col-6 mb-3 d-flex">
                    <h1 class="card-header">{{ $animal->nome }}</h1>
                    <div class="card-body">
                        <h5 class="card-title">Specie: {{ $animal->specie }}</h5>
                        <p class="card-text">Habitat: {{ $animal->habitat }} <br> Longevità: {{ $animal->longevità }} <br>
                        <p>Regione: {{ $animal->regione }}</p></p>
                        <a href="{{ route('pages.show', $animal) }}" class="btn btn-primary">Animal detail</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
