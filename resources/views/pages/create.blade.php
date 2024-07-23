@extends('app')
@section('main-section')
    <div class="container justify-content-center">
        <div class="row ">
            <h1 class="text-center">
                create new Animal
            </h1>
        </div>
        <div class="col-12">
            <form action="{{ route ('pages.store') }}" method="POST">
                @csrf
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
            </form>
        </div>
    </div>
@endsection
