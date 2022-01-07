<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index', [
            'articles' => Article::published()->paginate(5)
        ]);
    }

    public function search(Request $request)
    {
        return view('article.index', [
            'articles' => Article::filter([
                'search' => $request->input('search'),
                'category' => $request->input('category'),
                'author' => $request->input('author')
            ])->published()->paginate(5)
        ]);
    }

    public function show(Article $article)
    {
        return view('article.show', [
            'article' => $article
        ]);
    }
}
