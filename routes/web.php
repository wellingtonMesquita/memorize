
<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::group(['middleware' => 'auth'], function() {
Route::get('/cadastro', function () {return view('cadastro');});
Route::get('/words/leson', 'WordsController@getWords');
Route::post('/words/leson/comparar/{id}', 'WordsController@confirm');
Route::get('/words/leson/reset', 'WordsController@reset');
Route::get('/words/leson/review', 'WordsController@review');
Route::resource('words', 'WordsController');
Route::get('/', 'WordsController@dashboard')->name('home');
});
