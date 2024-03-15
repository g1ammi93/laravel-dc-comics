@extends('layouts.main')

@section('title', 'Home')

@section('main-content')

    <div class="container content">
        <div class="card-container">
            @foreach ($comics as $index => $comic)
                <div class="book-card">
                    <a href="{{ url("/comic/$index") }}">
                        <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}" class="img-card">
                    </a>
                    <h3 class="h3-card">{{ $comic['series'] }}</h3>
                </div>
            @endforeach
        </div>

    </div>
    <div class="flex-center">
        <button>SIGN-UP NOW!</button>
    </div>
    <div class="main-menu">

    </div>

@endsection
