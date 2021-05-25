<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


//admin
Route::group(['prefix' => 'admin'], function() {
    Route::resource('/categories', CategoryController::class);
    Route::resource('news', AdminNewsController::class);
});

//news
Route::get('/', [NewsController::class, 'index']);

Route::get('/category', [NewsController::class, 'newsCategoryShow'])
    ->name('news');

Route::get('/category/{id}/news', [NewsController::class, 'newsCategoryOutput'])
    ->where('id', '\d+')
    ->name('newsCategory');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');


/*Route::get('/hello/{name}', function ($name) {
    return "Hello, " . $name;
});

Route::get('/information/{project}', function ($project) {
    return "Information about " . $project;
});

*/