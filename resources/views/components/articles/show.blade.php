<h1 class="text-size-xl font-title">{{ $article->title }}</h1>
<small>publié le {{ $article->created_at->format('d/m/Y') }}</small>
<hr>
<p>{{ $article->body }}</p>
