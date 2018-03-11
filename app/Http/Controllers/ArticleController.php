<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use App\Http\Requests\UpdateArticle;

use Auth;

use App\Tag;
use App\ArticleTag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function browse()
    {
        $articles = Auth::user()->articles()->get();
        return view('articles.browse', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $data)
    {
        $article = Article::create([
          'title' => $data['title'],
          'body' => $data['body'],
          'user_id' => Auth::id(),
        ]);

        $tag = Tag::firstOrCreate([
          'name' => $data['tag'],
        ]);

        ArticleTag::create([
          'article_id' => $article->id,
          'tag_id' => $tag->id,
        ]);

        return redirect()->back()->with('success', 'L\'article: " '.$article->title.'" a bien été publié!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($articleId)
    {
        $article = Article::findOrFail($articleId);
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticle $data, $articleId)
    {
        $article = Article::findOrFail($articleId);

        if($article->user_id == Auth::id()) {
          $article->title = $data['title'];
          $article->body = $data['body'];
          $article->update();

          return redirect()->back()->with('success', 'L\'article: " '.$article->title.'" a bien été mis à jour!');
        } else {
          return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($articleId)
    {
        $article = Article::where('id', $articleId);
        $article->forceDelete();
        return redirect()->back();
    }

    public function softDelete($articleId) {
        $article = Article::where('id', $articleId)->firstOrFail();
        $article->delete();
        return redirect()->back();
    }

    public function restore($articleId) {
        $article = Article::where('id', $articleId);
        $article->restore();
        return redirect()->back();
    }

}
