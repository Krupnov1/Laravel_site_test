<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        return view('news.index');        
    }

    public function newsCategoryShow() {

        return view('news.category', [
            'newsCategoryList' => $this->newsCategoryList
        ]);
    }

    public function newsCategoryOutput() {

        return view('news.newsCategory', [
            'newsList' => $this->newsList
        ]);
    }

    public function show(int $id) {

        return view('news.show', [
            'id' => $id
        ]);
    }
}
