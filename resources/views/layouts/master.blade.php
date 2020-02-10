<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/master.css">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <title>Sigma - @yield('title')</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="/">
            <img src="/img/logo.png" alt="">
            </a>
        </div>
        <div class="center">
            <div class="categ">
                <p>Categorías</p>
                <ion-icon name="apps-outline"></ion-icon>
            </div>
            <form class="search-bar" action="/search" method="get" for="search-input">
                @csrf
                <div class="search-boor">
                    <input type="text" name="search" id ="search" class="search" autocomplete="off" placeholder="Buscar en Sigma">
                </div>
                <div class="icono">
                    <ion-icon name="search-outline" size="large"></ion-icon>
                </div>
            </form>
        </div>
        <div class="right">
            <a href="/carrito">
            <div class="cart">
                <p>Ver carrito</p>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            </a>
            @guest
            <a href="/login">
            <div class="user">
                <p>¡Inicia sesión!</p>
                <ion-icon name="log-in-outline"></ion-icon>
            </div>
            </a>
            @else
            <a href="/perfil">
            <div class="user">
                <p>{{ ucfirst(Auth::user()->first_name) }}</p>
                @if (Auth::user()->avatar != '')
                <img src="/storage/avatars/{{Auth::user()->avatar}}" alt="">
                @else
                <ion-icon name="person-outline"></ion-icon>
                @endif
            </div>
            </a>
            @endguest
            {{-- Tablet & mobile mode: --}}
            <div class="hamb">
                <ion-icon name="menu-outline" size="large"></ion-icon>
            </div>
        </div>
        <div class="hamb-menu">
            <ul>
                <li class="logo-menu">
                    <a href="/">
                    <img src="/img/logo.png" alt="">
                    </a>
                </li>
                <li>
                    @guest
                    <a href="/login">
                        ¡Inicia sesión!<ion-icon name="log-in-outline"></ion-icon>
                    </a>
                    @else
                    <a href="/perfil">
                        {{ ucfirst(Auth::user()->first_name) }}
                        @if (Auth::user()->avatar != '')
                        <img class="user-foto" src="/storage/avatars/{{Auth::user()->avatar}}" alt="">
                        @else
                        <ion-icon name="person-outline"></ion-icon>
                        @endif
                    </a>
                    @endguest</li>
                <li>
                    <a href="/carrito">
                    Carrito<ion-icon name="cart-outline"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="/lista">
                    Categorías<ion-icon name="apps-outline"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="/preguntas">
                    Preguntas frecuentes
                    </a>
                </li>
            </ul>
        </div>
    </header>


    <main>
      @yield('main')
    </main>

    <footer>
        <div class="left">
            <h2>Categorías</h2>
            <ul>
            @forelse ($vac['categorias'] as $categoria)
                <li>{{$categoria->nombre}}</li>
            @empty
                <li>No hay categorías</li>
            @endforelse
            </ul>
        </div>
        <div class="center">
            <img src="/img/logo.png" alt="">
            <p>Todos los derechos reservados</p>
        </div>
        <div class="right">
        <h2>Categorías</h2>
            <ul>
            @forelse ($vac['categorias'] as $categoria)
            <a href=""></a>
                <li>{{$categoria->nombre}}</li>
            @empty
                <li>No hay categorías</li>
            @endforelse
            </ul>
        </div>
    </footer>
    
    @yield ('scripts')
    <script src="/js/master.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>