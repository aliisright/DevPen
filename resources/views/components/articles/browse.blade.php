<div class="cards">
  @foreach($articles as $article)
    <div class="card-box">
      <div class="card-box-label"><p>Aliisright</p></div>
      <h1 class="text-size-l">{{ str_limit($article->title, 50, ' ...') }}</h1>
      <hr>
      <p class="text-size-xs"><i>publié le {{ $article->created_at }}</i></p>
      <div class="d-flex flex-wrap">
        <p class="badge badge-dark m-1">PHP</p>
        <p class="badge badge-dark m-1">CSS</p>
        <p class="badge badge-dark m-1">HTML</p>
      </div>
    </div>
  @endforeach
</div>
