@extends('app')
@section('main-section')

<h1>Animal Reserve</h1>
<div>
    @foreach ($animals as $animal)
        <ul>
            <li>
                <h1>
                {{ $animal->nome }}
                </h1>
                <p>Specie: {{ $animal->specie }}</p>
                <p>Habitat: {{ $animal->habitat }}</p>
                <p>Longevità: {{ $animal->longevità }}</p>
                <p>Regione: {{ $animal->regione }}</p>
                <br>
            </li>

        </ul>
    @endforeach
</div>
@endsection
