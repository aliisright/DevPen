@extends('layouts.app')

@section('content')
<!--A modifier le lien des article dans le chemin-->
  <h1 class="font-text text-size-m font-lighter text-grey">
    Bonjour {{ Auth::user()->nickname }}!<br>
    <span class="badge badge-dark"><a href="{{ Route('profiles.show', [$article->user->id]) }}" class="link">{{ $article->user->nickname }}</a> \ <a href="{{ Route('articles.browse') }}" class="link">articles</a> \ article No°: {{ $article->id }}</span></h1>

  <article class="article-section">
    <div class="row">

      <div class="col-md-2">
        @include('components.articles.article_sidebar')
      </div>

      <div class="text-size-s col-md-10 col-sm-12">
        @include('components.articles.show')
      </div>

    </div>
  </article>

@endsection
