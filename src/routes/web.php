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
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});


Route::get('quizy', 'BigQuestionController@index');

Route::get('quizy/{id?}', 'QuizyController@index');

Route::get('admin', 'AdminController@index')
    ->middleware('auth');

Route::get('admin/detail/{id?}', 'AdminDetailController@index');
Route::post('admin/detail/{id?}', 'AdminDetailController@update');

Route::get('admin/delete/{id?}', 'AdminDeleteController@delete');
Route::post('admin/delete/{id?}', 'AdminDeleteController@remove');

Route::get('admin/list', 'AdminListController@index');
Route::post('admin/list', 'AdminListController@create');

Route::get('admin/question/{id?}', 'AdminQuestionController@add');
Route::post('admin/question/{id?}', 'AdminQuestionController@create');

Route::get('admin/question/edit/{big_question_id?}/{question_id?}', 'AdminQuestionEditController@index');
Route::post('admin/question/edit/{big_question_id?}/{question_id}', 'AdminQuestionEditController@edit');

Route::get('admin/question/delete/{big_question_id?}/{question_id?}', 'AdminQuestionDeleteController@delete');
Route::post('admin/question/delete/{big_question_id?}/{question_id}', 'AdminQuestionDeleteController@remove');

Route::get('admin/choice/{big_question_id?}/{question_id}', 'AdminChoiceController@index');
Route::post('admin/choice/{big_question_id?}/{question_id}', 'AdminChoiceController@post');

Route::get('admin/choice/add/{big_question_id?}/{question_id}', 'AdminChoiceAddController@index');
Route::post('admin/choice/add/{big_question_id?}/{question_id}', 'AdminChoiceAddController@post');




Route::get('auth', 'AdminController@getAuth');
Route::post('auth', 'AdminController@postAuth');

// Route::get('admin/list', 'AdminListController@add');


// Route::get('admin/register', 'AdminController@getAuth');
// Route::post('admin/register', 'AdminController@postAuth');




// Route::get('hello/{id?}', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// Route::get('hello',function(){
//     return view('hello.index');
// });



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
