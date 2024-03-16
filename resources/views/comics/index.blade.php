@extends('layouts.main')

@section('title, Comics')

@section('main-content')

    <main>
        <div class="container">

            <h2 class="text-white text-center p-2">
                FUMETTI IN PRIMO PIANO
            </h2>


            <div class="card-container my-0">
                @forelse ($comics as $comic)
                    <div class="book-card">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <img src="{{ $comic->thumb }}" :alt="{{ $comic->series }}" class="img-card">
                        </a>
                        <h3 class="h3-card">{{ $comic->series }}</h3>
                    </div>
                @empty
                    Non ci sono fumetti
                @endforelse

            </div>
            <div class="flex-center">
                <button class="button-main mb-3">Scoprine Ancora!</button>
            </div>

            {{-- <div class="btn-div justify-center">
            <a href="{{ route('comics.create') }}">ADD A NEW COMIC</a>
        </div> --}}

        </div>
    </main>


@endsection
