@if(!$article->isLiked())
<a class="link" href="{{ route('likes.store') }}"
       onclick="event.preventDefault();
                     document.getElementById('like-form').submit();"><img src="{{ asset('icons/unfilled_heart.svg') }}" alt="Cœur" width="15px"> {{ count($article->likes) }} cœurs<form id="like-form" action="{{ route('likes.store') }}" method="post" style="display: none;">
    <input type="hidden" name="articleId" value="{{ $article->id }}">
      @csrf
  </form></a>
  @endif
@if($article->isLiked())
<a class="link" href="{{ route('likes.destroy', [$article->id]) }}"
       onclick="event.preventDefault();
                     document.getElementById('unlike-form').submit();"><img src="{{ asset('icons/filled_heart.svg') }}" alt="UnCœur" width="15px"> {{ count($article->likes) }} cœurs<form id="unlike-form" action="{{ route('likes.destroy', [$article->id]) }}" method="post" style="display: none;">
      @csrf
      @method('DELETE')
  </form></a>
@endif
