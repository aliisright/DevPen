@extends('layouts.app')

@section('content')

  @include('components.profiles.profile_header')

  <section class="container mx-3 row">
      <ul class="list-group col-md-6">
            <li class="list-group-item list-group-item-light"><span class="mx-2"><img src="{{ asset('icons/documents.svg') }}" alt="connectez-vous" width="20px"></span> Mes articles</li>
          @if(count($activeArticles))
              @foreach($activeArticles as $article)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <p>{{$article->title}} <br>
                    <small class="badge badge-light">publié le: {{ date("d/m/Y à h:i", strtotime($article->created_at)) }}</small></p>
                    <div class="d-flex">
                      <a class="tool-icon mx-1" href="{{ route('articles.edit', $article->id) }}"><img src="{{ asset('icons/pencil.svg') }}" alt="connectez-vous" width="15px"></a>
                      <a class="tool-icon mx-1" href="{{ Route('articles.softDelete', [$article->id]) }}"
                             onclick="event.preventDefault();
                                           document.getElementById('delete-form-{{$article->id}}').submit();"><img src="{{ asset('icons/bin.svg') }}" alt="connectez-vous" width="15px">
                        <form id="delete-form-{{$article->id}}" action="{{ Route('articles.softDelete', [$article->id]) }}" method="POST" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form></a>
                    </div>
                </li>
              @endforeach
          @else
              <p class="grey-text small-text"><i>Vous n'avez publié aucun article</i></p>
          @endif
      </ul>

      <ul class="list-group col-md-6">
            <li class="list-group-item list-group-item-light"><span class="mx-2"><img src="{{ asset('icons/bin.svg') }}" alt="connectez-vous" width="20px"></span> Articles supprimés</li>
          @if(count($deletedArticles))
              @foreach($deletedArticles as $article)
                <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                    <p>{{$article->title}} <br>
                    <small class="badge badge-light">supprimé le: {{ date("d/m/Y à h:i", strtotime($article->deleted_at)) }}</small></p>
                    <div class="d-flex">
                      <form class="p-0 mx-1" method="post" action="{{ Route('articles.restore', [$article->id]) }}">
                        <button class="btn btn-success">restaurer</button>
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                      </form>
                      <form class="col-md-6 p-0 mx-1" method="post" action="{{ Route('articles.destroy', [$article->id]) }}">
                        <button class="nav-button btn btn-danger"><b>X</b></button>
                        @method('DELETE')
                        @csrf
                      </form>
                    </div>
                </li>
              @endforeach
          @else
              <p class="grey-text small-text"><i>Vous n'avez pas d'articles supprimés</i></p>
          @endif
      </ul>
  </section>


@endsection
