<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
  @if(\Route::current()->getName() == 'articles.show')
    @include('components.edit_box')
  @endif
    <div id="app">

      <nav class="navbar">
        <div class="site-navbar container d-flex justify-content-between align-items-center">

          <a class="link" href="{{ Route('home') }}"><h1 class="text-size-l font-title text-dark-grey m-0">DevInk</h1></a>

          <ul class="list list-inline m-0">
            @guest
              <a class="link" href="{{ Route('login') }}"><li class="font-text list-inline-item text-grey mx-2"><img src="{{ asset('icons/on_off.svg') }}" alt="connectez-vous" width="15px"> Connexion</li></a>

              <a class="link" href="{{ Route('register') }}"><li class="font-text list-inline-item text-grey mx-2"><button class="btn btn-success py-0">Inscription</button></li></a>
            @else
              <a class="link" href="{{ Route('articles.create') }}"><li class="font-text list-inline-item text-grey mx-2"><button class="btn bg-light-secondary text-white py-0">Créer un article</button></li></a>

              <a class="link" href="{{ Route('home') }}" title="Le Stream"><li class="font-text list-inline-item text-grey mx-2"><img src="{{ asset('icons/stream.svg') }}" alt="Le stream" width="20px"></li></a>

              <a class="link" href="#"><li class="font-text list-inline-item text-grey mx-2"><img src="{{ asset('icons/documents.svg') }}" alt="Mes articles" width="20px"></li></a>

              <a class="link" href="#"><li class="font-text list-inline-item text-grey mx-2"><img src="{{ asset('icons/settings.svg') }}" alt="Mon compte" width="20px"></li></a>

              <a class="link dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><li class="font-text list-inline-item text-grey mx-2"><div class="navbar-profile-photo m-auto"></div>
              </li></a>

              <div class="dropdown-menu navbar-profile-photo-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ Route('profiles.index', [Auth::user()->nickname]) }}">Mon profil</a>
                <a class="dropdown-item" href="#">Réglages</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="link dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><li class="font-text list-inline-item text-grey mx-2">Logout
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form></li></a>
              </div>


            @endguest
          </ul>
        </div>
      </nav>


      <main class="py-4 container">
          @yield('content')
      </main>

      <footer class="site-footer container">
        <hr>
        <p class="font-light text-light-grey text-size-xs">Ali Hasan &copy; 2018</p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
