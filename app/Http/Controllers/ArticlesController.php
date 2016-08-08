<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function index()
    {
        return Article::all();
    }
 
    public function store(ArticleRequest $request)
    {
        return Article::create($request->all());
    }
 
    public function show(Article $article)
    {
        return $article;
    }
 
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return $article;
    }
 
    public function destroy(Article $article)
    {
        return (string) $article->delete();
    }
}
