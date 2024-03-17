@extends('layouts.main')

@section('title', 'Crea Comic')

@section('section-id', 'create-comic')

@section('main-content')



    <div class="card-body container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-white">Pagina creazione fumetto</h1>
            <a class="btn btn-secondary my-3" href="{{ route('comics.index') }}">Indietro</a>
        </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Es. Batman">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" name="description" class="form-control" id="description"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" name="thumb" class="form-control" id="thumb"
                            placeholder="Es.: http://...">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Es.: 19.99">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series"
                            placeholder="Es.: Batman Collection">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" name="sale_date" class="form-control" id="sale_date"
                            placeholder="Es.: 2020-10-10">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" class="form-control" id="type"
                            placeholder="Es.: Avventura ">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" name="artists" class="form-control" id="artists"
                            placeholder="Es.: Bernard Chang">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" name="writers" class="form-control" id="writers"
                            placeholder="Es.: Dan Jurgens">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end align-items-center gap-1">
                <button type="reset" class="btn btn-secondary my-4"> Svuota tutti i campi</button>
                <button type="submit" class="btn btn-success"> Salva</button>
            </div>
        </form>
    </div>

@endsection
