<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {

        return view('news.index');        
    }

    public function newsCategoryShow() {

        $model = new Category();
        $categories = $model->getCategoriesList();
        return view('news.category', [
            'categories' => $categories   
        ]);
    }

    public function newsOutput() {

        $model = new News();
        return view('news.news', [
            'newsList' => $model->getNewsList()
        ]);
    }

    public function show(int $id) {

        $model = new News();
        $news = $model->getNews($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
