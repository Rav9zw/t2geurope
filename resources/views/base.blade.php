<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T2geurope</title>

    @vite(['resources/js/app.js'])

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    <div class="container-fluid">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{Route::is('codeBreaker') ? 'active' :''}}" aria-current="page"
                   href="/code_breaker">Łamacz kodu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('lcd') ? 'active' :''}}" href="/lcd">Wyświetlacz LCD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('winningTickets') ? 'active' :''}}" href="/winning_tickets">Wygrane losy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('earningStats') ? 'active' :''}}" href="/earning_stats">Statystyka zarobków</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('timeCounter') ? 'active' :''}}" href="/time_counter">Licznik</a>
            </li>
        </ul>

    </div>
    </div>
</nav>

@yield('content')
</body>
</html>
