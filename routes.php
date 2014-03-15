<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
|ルーティングの使い方基本
	return 	View::	make('hello');
			↑        ↑view/hello.phpのビューを生成するよ
*/

Route::get('/', function()
{
	return View::make('top');
});


Route::get('users', function()
{
    return View::make('users');
});
Route::get('dbtest', function()
{
    $testdata = testdata::all();
    return View::make('testdata')->with('testdata',$testdata);
});

Route::get('boottest', function()
{
	return View::make('boottest');
});

Route::get('dbtest2', 'DbtestController@showDbData');

Route::get('seiyukai', 'SeiyukaiController@showDbData');