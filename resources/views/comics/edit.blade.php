@extends('layouts.main')

@section('title', 'Modifica Squadra')


@section('main-content')

    <div class="card-body container">

        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-white">Pagina Modifica fumetto</h1>
            <a class="btn btn-secondary my-3" href="{{ route('comics.index') }}">Indietro</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Ci sono errori nel form</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Es. Batman"
                            value="{{ old('title', $comic->title) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" name="description" class="form-control" id="description">{{ old('description', $comic->description) }}</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" name="thumb" class="form-control" id="thumb"
                            placeholder="Es.: http://..." value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Es.: 19.99"
                            value="{{ old('price', $comic->price) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series"
                            placeholder="Es.: Batman Collection" value="{{ old('series', $comic->series) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" name="sale_date" class="form-control" id="sale_date"
                            placeholder="Es.: 2020-10-10" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" class="form-control" id="type"
                            placeholder="Es.: Avventura " value="{{ old('type', $comic->type) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" name="artists" class="form-control" id="artists"
                            placeholder="Es.: Bernard Chang" value="{{ old('artists', $comic->artists) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" name="writers" class="form-control" id="writers"
                            placeholder="Es.: Dan Jurgens" value="{{ old('writers', $comic->writers) }}">
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
