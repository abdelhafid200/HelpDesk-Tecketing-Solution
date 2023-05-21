<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function search(){

        $articles = Article::all();
        return view('public.article.search', compact('articles'));

    }


    public function show(Request $request){


        $request->validate([

            'titre' => 'required',
        ]);

        $titre = $request->input('titre');
        $articles = Article::where('title', 'like' ,"%$titre%")
                            ->orWhere('content','like',"%$titre%")->get();

        return view('public.article.result-search' ,compact('articles'));
    }

    public function article($id){

        $article = Article::where('id', $id)->first();
        return view('public.article.article', compact('article'));
    }
}
