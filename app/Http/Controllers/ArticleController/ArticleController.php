<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle(){
        return view('article.show-article');
    }
    public function showArticleDescription(){
        return view('article.show-articleDescription');
    }
}
