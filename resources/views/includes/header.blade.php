<header>
    <div class="container div-header">
        <a href="{{ url('/') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Dc comics" class="img-header">
        </a>
        <ul class="ul-header">
            @foreach (config('header_nav') as $nav)
                <li>
                    <a href="{{ config($nav['url']) }}"
                        class="{{ request()->routeIs($nav['url']) ? 'active' : '' }} a-header">{{ $nav['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
