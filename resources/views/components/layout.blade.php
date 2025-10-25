

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SkyLog</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        @if (session('success'))
            <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
            </div>
        @endif

        <header>
            <a href="{{ url('/') }}"><img src="{{ asset('images/skylog-logo-small.png') }}" alt="skylog logo"></a>

                <div class="nav-bar">
                    @guest
                        <a href="{{ route('show.login') }}" class="button-primary-right">Login</a>

                        <a href="{{ route('show.register') }}" class="button-primary-right">Register</a>
                    @endguest

                    @auth
                        <span class="border-r-2 pr-5">
                            Hi there, {{ Auth::user()->name }}
                        </span>

                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="button-primary-right">Logout</button>
                        </form>
                    @endauth
                </div>
            </header>

    <main>
    @auth
        <div class="navbar">
        <a href="{{ route('drone.index') }}">Drones</a>
        <a href="{{ route('drone.index') }}">Batteries</a>
        <a href="{{ route('drone.index') }}">Flight Crew</a>
        <a href="{{ route('drone.index') }}">Flights</a>
    </div>
    @endauth
        {{ $slot }}
    </main>

    </body>
</html>
