<form method="post" action="{{ Route('articles.update', [$article->id]) }}">
  <p class="font-text text-size-l font-lighter text-grey">Modifier l'article: <strong>{{ $article->title }}</strong></p>

  @if($errors->any())
    <div>
      <ul class="list-unstyled alert alert-danger">
        @foreach($errors->all() as $error)
          <li>
            {{ $error }}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(Session::get('success'))
    <div class="">
      <p class="py-0 alert alert-success">{{ Session::get('success') }}</p>
    </div>
  @endif

  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" placeholder="le titre de votre article">
  </div>

  <div class="form-group">
    <label for="body"></label>
    <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" id="body" rows="10">Votre article ici...</textarea>
  </div>

  <div class="form-group text-center">
    <button type="submit" class="btn btn-dark">Enregistrer</button>
  </div>

  @method('PUT')
  @csrf
</form>
