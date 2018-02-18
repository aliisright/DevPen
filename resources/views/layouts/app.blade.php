<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
    <div id="app">

      <nav class="navbar">
        <div class="site-navbar container d-flex justify-content-between align-items-center">

          <a class="link" href="#"><h1 class="text-size-l font-title text-dark-grey m-0">DevInk</h1></a>

          <ul class="list list-inline m-0">
            @guest
              <a class="link" href="{{ Route('login') }}"><li class="font-text list-inline-item text-grey mx-2">Connexion</li></a>
              <a class="link" href="{{ Route('register') }}"><li class="font-text list-inline-item text-grey mx-2">Inscription</li></a>
            @else
              <a class="link" href="{{ Route('home') }}"><li class="font-text list-inline-item text-grey mx-2">Le Stream</li></a>
              <a class="link" href="#"><li class="font-text list-inline-item text-grey mx-2">Mon compte</li></a>
              <a class="link" href="{{ Route('articles.index') }}"><li class="font-text list-inline-item text-grey mx-2">Profile</li></a>
              <a class="link" href="#"><li class="font-text list-inline-item text-grey mx-2">{{Auth::user()->nickname}}</li></a>


              <a class="link" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><li class="font-text list-inline-item text-grey mx-2">Logout
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form></li></a>
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
