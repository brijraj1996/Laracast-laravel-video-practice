<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Requests\ArticleRequest;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use App\Tag;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        if(request('tag')) {
            $articles = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }

        else {
            $articles = Article::latest()->get();
        }

        return view('articles.index',['articles' => $articles]);

    }

    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);   
    }

    public function store(ArticleRequest $request)
    {
        $article = Article::create($request->validated());
     
        $article->tags()->attach(request('tags'));
    
        return redirect(route('articles.show', $article));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());

        return redirect(route('articles.show', $article));
    }
}
