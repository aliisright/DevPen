<div class="cards">
  @foreach($articles as $article)
    <div class="card-box">
      <div class="card-box-label"><p>TOP</p></div>
      <a href="{{ Route('articles.show', [$article]) }}" class=""><h1 class="text-size-l">{{ str_limit($article->title, 50, ' ...') }}</h1></a>
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
