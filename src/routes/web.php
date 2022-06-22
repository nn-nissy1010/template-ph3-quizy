<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
    // ->middleware('hello');

Route::post('hello', 'HelloController@post');

Route::get('quizy/{id?}', 'quizyController@index');

// Route::get('hello/{id?}', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// Route::get('hello',function(){
//     return view('hello.index');
// });
