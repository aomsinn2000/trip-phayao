<?php

use App\Http\Controllers\DealController\DealController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\ArticleController\ArticleController;
use App\Http\Controllers\LoginController\LoginController;
use App\Http\Controllers\PlaceHitController\PlaceHitController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('login', [LoginController::class, 'showLogin']);


Route::get('deal', [DealController::class, 'deal']);


Route::get('placeHit', [PlaceHitController::class, 'placeHit']);
Route::get('descriptionPlaceHit', [PlaceHitController::class, 'descriptionShow']);

Route::get('article', [ArticleController::class, 'showArticle']);
/* Route::get('/test', 'HomeController\HomeController@testnav'); */
// Route::get('test', function () {
//     return view('layouts.navbar');
// });
