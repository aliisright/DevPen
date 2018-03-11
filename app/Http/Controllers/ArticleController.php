<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleFormRequest;

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
    public function store(ArticleFormRequest $request)
    {
        $article = Article::create([
          'title' => $request['title'],
          'body' => $request['body'],
          'user_id' => Auth::id(),
        ]);

        $tag = Tag::firstOrCreate([
          'name' => $request['tag'],
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
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleFormRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($articleId)
    {
      Article::where('id', $articleId)->where('user_id', Auth::id())->firstOrFail()->delete();

      return redirect()->back();
    }
}
