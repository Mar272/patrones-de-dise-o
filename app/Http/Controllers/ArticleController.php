<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Ejemplo de uso del patrón Builder
        $articles = Article::where('status', 'published')
                           ->orderBy('created_at', 'desc')
                           ->get();

        return response()->json($articles);
    }
}
