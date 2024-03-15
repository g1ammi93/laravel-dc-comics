<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | @yield('title')</title>


    <link rel="icon" href="{{ asset('../img/dc-logo.png') }}" type="images/png">

    @vite('resources/js/app.js')
</head>



<body>
    @include('includes.header')

    <figure class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron Robin">
    </figure>


    <main>
        @yield('main-content')
    </main>

    @include('includes.footer')

</body>

</html>
