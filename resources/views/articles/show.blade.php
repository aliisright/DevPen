@extends('layouts.app')

@section('content')

  <h1 class="font-text text-size-m font-lighter text-grey">Bonjour {{ Auth::user()->nickname }}! \ articles \ {{ $article->title }}</h1>

  <article class="article-section">
    <div class="row">

      <div class="col-md-2">
        <div class="box">
          <div class="profile-photo m-auto"></div>
          <p>Autheur: {{ $article->user->nickname }}</p>

          <div class="d-flex flex-wrap">
            <p>mots clés: </p>
            @foreach($article->tags as $tag)
              <p class="badge badge-dark">{{ $tag->name }}</p>
            @endforeach
          </div>
        </div>
        <div class="box text-center">
          @include('components.articles.likes')
        </div>
      </div>

      <div class="text-size-s col-md-10 col-sm-12">
        @include('components.articles.show')
      </div>

    </div>
  </article>

@endsection
