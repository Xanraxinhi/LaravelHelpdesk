<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DummyFullModelClass;
use App\Article;
use App\lain;
class ArticlesController extends Controller
{
	public function index(lain $lain)
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }    
}
