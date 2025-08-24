<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app2.js'])
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Mi Dashboard</a>
        <div class="d-flex">
            @if(session('usuario'))
                <span class="navbar-text me-3">Hola, {{ session('usuario.name') }}</span>
                <a class="btn btn-outline-light btn-sm" href="{{ route('logout') }}">Salir</a>
            @endif
        </div>
    </div>
</nav>

<main class="container py-4 mt-4">
    @yield('content')
</main>
</body>
</html>
