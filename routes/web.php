<?php

use App\Http\Controllers\Form\OrdersController;
use App\Http\Controllers\Form\ReviewsController;
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
    Route::resource('/news', AdminNewsController::class);
});

//news
Route::get('/', [NewsController::class, 'index']);

Route::get('/category', [NewsController::class, 'newsCategoryShow'])
    ->name('newsCategory');

Route::get('/category/{id}/news', [NewsController::class, 'newsOutput'])
    ->where('id', '\d+')
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

//form
Route::group(['prefix' => 'form'], function() {
    Route::resource('/reviews', ReviewsController::class)
        ->name('index', 'reviews');
    Route::resource('/orders', OrdersController::class)
        ->name('index', 'orders');
});
