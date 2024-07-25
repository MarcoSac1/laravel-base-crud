@extends('app')
@section('main-section')
    <div class="container ">
        <div class="row justify-content-center">
            <h1 class="text-center">
                create new Animal
            </h1>
        </div>
        @if ($errors-> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as  $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-6 ">
            <form action="{{ route ('pages.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="AnimalId">Animal id</label>
                    <input class="form-control form-control-sm mb-2" type="number" placeholder="Animal id" aria-label="id " id="id" name="id">
                </div>

                <div class="mb-3">
                    <label for="AnimalSpecie">Animal Specie</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal specie" aria-label="Animal Specie" id="specie" name="specie">
                </div>

                <div class="mb-3">
                    <label for="AnimalHabitat">Animal Habitat</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal habitat" aria-label="Animal Habitat" id="habitat" name="habitat">
                </div>

                <div class="mb-3">
                    <label for="AnimalLongevità">Animal Longevità</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal longevità" aria-label="Animal Longevità" id="longevità" name="longevità">
                </div>

                <div class="mb-3">
                    <label for="Animal rischio_estinzione">Rischio di Estinzione</label>
                    <input class="form-control form-control-sm mb-2" type="number" placeholder="Animal rischio estinzione" aria-label="rischio_estinzione" id="rischio_estinzione" name="rischio_estinzione">
                </div>

                <div class="mb-3">
                    <label for="Animal alimentazione">alimentazione</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal alimentazione" aria-label="Animal alimentazione" id="alimentazione" name="alimentazione">
                </div>

                <div class="mb-3">
                    <label for="Animal regione">regione</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal regione" aria-label="Animal regione" id="regione" name="regione">
                </div>

                <div class="mb-3 d-flex justify-content-between py-2 ">
                    <input type="reset" value="Reset fields" class="btn btn-warning">
                    <input type="submit" value="Create New Animal" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
