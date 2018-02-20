<h1 class="text-size-xl font-title">{{ $article->title }}</h1>
<small>publié par {{ $article->user->nickname }}</small>
<hr>
<p>{{ $article->body }}</p>
