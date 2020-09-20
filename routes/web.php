<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

Route::get('/posts/{slug}', 'PostController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest('id')->get()
    ]);
});

Route::get('/test_easymoney', function () {
    $text = 'เลือกทำงานที่เรารักและจะไม่มีวันไหนที่รู้สึกว่าตัวเองต้องทำงานเลย';
    $result = array();

    for($i=0;$i<iconv_strlen($text,'UTF-8');$i++){
        if($i%24 === 0){
            array_push($result,iconv_substr($text,$i,24,'UTF-8'));
        }
    }

    dd($result);
    
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
