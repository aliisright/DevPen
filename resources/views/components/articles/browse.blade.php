<div class="cards">
  @foreach($articles as $article)
    <div class="card-box">
      <div class="card-box-label"><p>Aliisright</p></div>
      <h1 class="text-size-l">{{ str_limit($article->title, 50, ' ...') }}</h1>
      <hr>
      <p class="text-size-xs"><i>publié le {{ $article->created_at }}</i></p>
      <div class="d-flex flex-wrap">
        @foreach($article->tags as $tag)
          <p class="badge badge-dark m-1">{{ $tag->name }}</p>
        @endforeach
      </div>
    </div>
  @endforeach
</div>
