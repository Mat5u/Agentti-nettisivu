<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shalainen aghentti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="nappi.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color: black; margin-top: 5em;">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #8B0000;">
            <div class="container-fluid">
              <a class="navbar-brand" href="/" style="color: white;">Etusivu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  @guest
                    <li class="nav-item">
                      <a class="nav-link" href="/kauppa" style="color: white;">Kauppa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}" style="color: white;">Kirjaudu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}" style="color: white;">Rekisteröidy ja Kirjaudu</a>
                    </li>
                  @else
                    <li class="nav-item">
                      <a class="nav-link" href="/kauppa" style="color: white;">Kauppa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/palaute" style="color: white;">Palaute</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Todo
                      </a>
                      <ul class="dropdown-menu " style="background-color: #740000;">
                        <li><a class="dropdown-item" href="{{route('todoLomake')}}" style="color: white;">Todo lisää</a></li>
                        <li><a class="dropdown-item" href="{{route('todoKaikki')}}" style="color: white;">Todo kaikki</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Tiedot
                      </a>
                      <ul class="dropdown-menu" style="background-color: #740000;">
                        <li><a class="dropdown-item" href="{{route('tuotteetLomake')}}" style="color: white;">Lisää tuote</a></li>
                        <li><a class="dropdown-item" href="{{route('tuotteetKaikki')}}" style="color: white;">Muokkaa tuotetta</a></li>
                        <li><hr class="dropdown-divider" style="color: white;"></li>
                        <li><a class="dropdown-item" href="{{route('valmistajaLomake')}}" style="color: white;">Lisää valmistaja</a></li>
                        <li><a class="dropdown-item" href="{{route('valmistajaKaikki')}}" style="color: white;">Muokkaa valmistajaa</a></li>
                        <li><hr class="dropdown-divider" style="color: white;"></li>
                        <li><a class="dropdown-item" href="{{route('images.view')}}" style="color: white;">Katso kuvia</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white !important;">
                          {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu" style="background-color: #740000;">
                      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white !important;">Kirjaudu ulos</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                              @csrf
                          </form>
                      </li>
                      </ul>
                  </li>
                  @endguest
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #740000; border-color: black; color: white;">
                  <button class="btn btn-primary" type="submit" >Search</button>
                  <br>
                </form>
              </div>
            </div>
        </nav>
    {{ $slot }}
    </div>
</body>
</html>
