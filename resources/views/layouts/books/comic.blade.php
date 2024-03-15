@extends('layouts.main')

@section('title', $comic['title'])

@section('main-content')
    <div class="comic-body">
        <div class="container">
            <h1 class="comic-title">{{ $comic['title'] }}</h1>
            <p class="comic-price">{{ $comic['price'] }}</p>
            <p class="comic-p">{{ $comic['description'] }}</p>
        </div>
    </div>
@endsection
