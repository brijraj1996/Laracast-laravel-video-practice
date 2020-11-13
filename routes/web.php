<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $articles = App\Article::take(3)->latest()->get();

    return view('about',[
        'articles' => $articles
    ]);
});

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');

Route::middleware('auth')->group(function () {

    Route::put('/articles/{article}','ArticlesController@update');
    Route::get('/articles/{article}/edit','ArticlesController@edit');
    Route::get('/articles/create','ArticlesController@create');
    Route::post('/articles', 'ArticlesController@store');
    Route::get('/articles', 'ArticlesController@index')->name('articles.index');
    Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
    Route::get('/logout', 'LoginController@logout');
});