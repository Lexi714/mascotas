<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Mascotas')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="app-body">
    <div class="app-shell">
        <header class="app-header">
            <div class="app-container app-header__inner">
                <div>
                    <p class="app-kicker">Programación III</p>
                    <h1 class="app-brand">
                        <i class="fa-solid fa-paw"></i>
                        Sistema de Mascotas
                    </h1>
                </div>

                <nav class="app-nav">
                    <a href="{{ route('pets.index') }}" class="app-nav__link">
                        <i class="fa-solid fa-list"></i>
                        Listado
                    </a>
                    <a href="{{ route('pets.create') }}" class="app-nav__link app-nav__link--primary">
                        <i class="fa-solid fa-plus"></i>
                        Nueva Mascota
                    </a>
                </nav>
            </div>
        </header>

        <main class="app-container app-main">
            @yield('content')
        </main>

        <footer class="app-footer">
            Programación III - Laravel 13
        </footer>
    </div>
</body>
</html>
