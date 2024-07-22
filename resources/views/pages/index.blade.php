@extends('app')
@section('main-section')

<h1>Animal Reserve</h1>
<div>
    @foreach ($animals as $animal)
        <ul>
            <li>
                {{ $animal->nome }}
            </li>
        </ul>
    @endforeach
</div>
@endsection
