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
        return view('article.show-article-description');
    }
    public function viewArticle(){
        return view('article.view-article');
    }
    public function addArticle(){
        return view('article.add-article');
    }
    public function editArticle(){
        return view('article.edit-article');
    }
}
