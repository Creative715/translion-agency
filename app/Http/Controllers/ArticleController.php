<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('app.pages.articles', compact('articles'));
    }

    public function more($slug)
    {
        $articles = Article::findBySlug($slug);
        return view('app.pages.article', compact('articles'));
    }
}
