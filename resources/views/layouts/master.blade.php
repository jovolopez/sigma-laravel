<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/header.css">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <title>Sigma - @yield('title')</title>
  </head>
  <body>
    <header>
      <div class="cont-head">
        <div class="h-top">
          <a href="#">
            <ion-icon name="arrow-up" size="large" role="img" class="md icon-large hydrated" aria-label="arrow-up"></ion-icon>
          </a>
        </div>
        <div class="h-logo">
          <a href="/">
            <h1>Sigma</h1>
          </a>
        </div>
        <div class="h-busq-sm">
          <ion-icon name="ios-search" size="large" role="img" class="md icon-large hydrated" aria-label="search"></ion-icon>
        </div>

        <div class="h-bar">
          <div class="h-hiperv">
            <a href="checkout.php">
              <div class="h-icontext">
                <div class="h-text">
                  <a href="/carrito">Ver carrito</a>
                </div>
                <div class="h-icon">
                  <ion-icon class="nav-icon" name="cart"></ion-icon>
                </div>
              </div>
            </a>
          </div>
          <!-- Authentication Links -->
          <div class="h-hiperv">

              <div class="h-icontext">
                @guest
                  <div class="h-text">
                    <p>Mi Cuenta</p>
                  </div>
                @else
                  <div class="h-text">
                    {{ ucfirst(Auth::user()->first_name) }}
                  </div>
                @endguest
                <div class="h-icon">
                  <ion-icon class="nav-icon" name="person"></ion-icon>
                </div>
              </div>

              <div class="submenu">
                @guest
                  <div class="h-text">
                    <a href="/login">Iniciar Sesion</a>
                    <a href="/register">Registrarse</a>
                  </div>
                @else
                  <div class="sub-text">
                    <a href="/perfil">Mi cuenta</a>
                  </div>
                  <div class="sub-text">
                    <form class="logout" action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit" name="button">Desconectarse</button>
                    </form>
                  </div>
                @endguest
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cont-head-b">
        <form class="form-busq" action="/search" method="get">
          @csrf
          <div class="h-categorias">
            <div class="cate-text">
              Categorías
            </div>
            <div class="cate-icon">
              <ion-icon name="arrow-dropdown"></ion-icon>
            </div>
          </div>
          <div class="busq-input">
            <input type="text" name="search" id ="search" class="search" autocomplete="off" placeholder="Buscar en Sigma">
          </div>
          <div class="busq-icon">
            <ion-icon name="ios-search" role="img" aria-label="search"></ion-icon>
          </div>
        </form>
      </div>
    </header>
    <main>
      @yield('main')
    </main>
    <div class="nav-menu">
      <div><a href="/"><ion-icon class="nav-icon" name="home"></ion-icon></a></div>
      <div><a href="lista"><ion-icon class="nav-icon" name="list"></ion-icon></a></div>
      <div><a href="carrito"><ion-icon class="nav-icon" name="cart"></ion-icon></a></div>
      <div><a href="perfil"><ion-icon class="nav-icon" name="person"></ion-icon></a></div>
    </div>
    <footer>
      <div class="bg-cont">
        <div class="izq">
          <h3>Categorias.</h3>
          <ul>
            <a href="#"><li>Remeras</li></a>
            <a href="#"><li>Gorras</li></a>
            <a href="#"><li>Hoodies</li></a>
            <a href="#"><li>Black Widow's choice</li></a>
            <a href="#"><li>Armaduras Mark</li></a>
          </ul>
        </div>

        <div class="center">
          <div class="redes">
            <h3>Redes Sociales</h3>
            <ul>
              <a href="https://www.instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
              <a href="https://www.twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="https://www.facebook.com" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="https://www.youtube.com" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            </ul>
          </div>

          <div class="acercaDe">
            <h3>Sobre Nosotros</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <br>
            <div class="help">
              <h4><a href="/preguntas">Ayuda - Preguntas frecuentes - Contacto </a></h4>
            </div>
          </div>
        </div>

        <div class="der">
          <form class="newsletter" action="index.html" method="post">
            <label for="correo">Suscribase</label>
            <br>
            <input type="email" name="" value="" placeholder="correo@ejemplo.com">
            <button type="submit" name="button">Suscribirse</button>
          </form>

          <br>
          <h3>Dónde estamos:</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3496434793474!2d-58.38383774949727!3d-34.620603565802206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ed147873%3A0xa6a660992184c8be!2sUnnamed%20Road%2C%20C1103%20CABA!5e0!3m2!1ses-419!2sar!4v1569443551766!5m2!1ses-419!2sar" width="300" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="copyright">
        <p> <> with ♥ in Digital House</p>
        <br>
        <p>Sigma 2019, todos los derechos reservados.</p>
      </div>
    </footer>
    @yield ('scripts')

    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
