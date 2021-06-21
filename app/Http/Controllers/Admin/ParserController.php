<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreate;
use App\Http\Requests\NewsParserCreate;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index(ParserService $service) {

        $services = $service->getNews('https://news.yandex.ru/music.rss'); 
    
        $services = (object)$services;
        $news = (object)$services->news;
        
        foreach($news as $item) {
            $items[] = (object)$item;  
        }

        $categories = Category::all();
        
        return view('admin.parser.index', [
            'services' => $services,
            'items' => $items,
            'categories' => $categories
        ]);
    }
}
