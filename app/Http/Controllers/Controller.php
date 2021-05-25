<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests; 

    protected array $newsCategoryList = [
        'News Category 1',
        'News Category 2',
        'News Category 3',
        'News Category 4',
        'News Category 5'
    ];

    protected array $newsList = [
        'News 1',
        'News 2',
        'News 3',
        'News 4',
        'News 5'
    ];
}
