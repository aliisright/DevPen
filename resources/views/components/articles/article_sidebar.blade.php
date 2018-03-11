<div class="box">
  <div class="profile-photo m-auto"></div>
  <p class="text-center"><img src="{{ asset('icons/person.svg') }}" alt="favoris" width="15px"> {{ $article->user->nickname }}</p>
</div>

<div class="box text-center">
  @include('components.articles.likes')
</div>
<div class="box d-flex justify-content-around">
    <a href="#"><img src="{{ asset('icons/flag.svg') }}" alt="signaler" width="20px"></a>
    <a href="#"><img src="{{ asset('icons/share.svg') }}" alt="signaler" width="20px"></a>
</div>
<div class="box d-flex flex-wrap">
  <p>mots clés: </p>
  @foreach($article->tags as $tag)
    <p class="badge badge-dark">{{ $tag->name }}</p>
  @endforeach
</div>
