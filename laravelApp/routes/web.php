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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', function() {
//    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//});
//Route::get('hello', 'HelloController@index');
//Route::get('hello/{id?}/{pass?}', 'HelloController@index');
//Route::get('hello',       'HelloController@index');
//Route::get('hello/other', 'HelloController@other');

// View
//Route::get('hello', function() {
//    //view('フォルダ名.ファイル名') helloフォルダの中にあるindex.phpが指定される
//    //return view('hello.index');
//    return view('hello.index');
//});
//Route::get('hello', 'HelloController@index');
//Route::get('hello/{id?}', 'HelloController@index');
Route::get('hello',  'HelloController@index');
Route::post('hello', 'HelloController@post');


Route::get( 'hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');



