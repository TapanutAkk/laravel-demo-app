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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createlcom/check_prime', function () {

    $result['inputs'] = [3,1,9,10,7,2,5,4,6,8];
    $result['primes'] = [];
    $result['number'] = [];

    $check_prime = false;
    foreach($result['inputs'] as $input){
        $check_prime = true;
        if($input == 1){
            array_push($result['number'],$input);
        } else {
            for($i=2;$i<$input;$i++){
                if($input % $i == 0){
                    $check_prime = false;
                    break;
                }
            }
            if($check_prime){
                array_push($result['primes'],$input);
            } else {
                array_push($result['number'],$input);
            }
        }
        
    }
    
    dd($result);
    
});

Route::get('/createlcom/start_vowel', function () {

    $result['inputs'] = ['Apple','Banana','Coconut','Elderberry','Fig','Grapes','Mango','Melon','Orange'];
    $result['search'] = ['A','E','I','O','U'];
    $result['vowel'] = [];
    $result['no_vowel'] = [];

    $check_prime = false;
    foreach($result['inputs'] as $input){
        if (in_array($input[0], $result['search'])){
            array_push($result['vowel'],$input);
        } else {
            array_push($result['no_vowel'],$input);
        }
        
    }
    
    dd($result);
    
});