<h1 class="font-text text-size-xl font-lighter text-grey">Bonjour {{ Auth::user()->nickname }}!</h1>

<ul class="list list-inline my-5">
  <a class="link" href="{{ Route('profiles.index', [Auth::user()->nickname]) }}"><li class="font-text list-inline-item text-grey font-light text-size-s mr-5">Mon profil</li></a>
  <a class="link" href="{{ Route('profiles.articles', [Auth::user()->nickname]) }}"><li class="font-text list-inline-item text-grey font-light text-size-s mr-5">Mes articles</li></a>
  <a class="link" href="#"><li class="font-text list-inline-item text-grey font-light text-size-s mr-5">Réglages du compte</li></a>

  <hr class="my-0">
</ul>
