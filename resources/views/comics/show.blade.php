@extends('layouts.main')

@section('title', $comic->title)

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
        integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=='
        crossorigin='anonymous' />
@endsection

@section('main-content')
    <div class="comic-body">
        <div class="container">
            <h1 class="comic-title">{{ $comic->title }}</h1>
            <p class="comic-price">{{ $comic->price }}</p>
            <p class="comic-p">{{ $comic->description }}</p>
        </div>
    </div>
    <div class="bg-white d-flex justify-content-between py-3">
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna Indietro</a>
        <a href="{{ url("/comics/$comic->id/edit") }}" class="btn btn-warning">Modifica</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection
