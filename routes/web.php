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

Auth::routes();


Route::resource('admin/gifs','GifsController');
Route::put('admin/gifs/{id}/autorize',['as' => 'gifs.autorize','uses' => 'GifsController@autorize']);


Route::get('/', 'FrontController@index');

Route::get('/gifs/show/{slug}', 'FrontController@show');

Route::get('gifs/{filename}',function($filename){
	$path=storage_path("app/public/gifs/$filename");
	if(!\File::exists($path)) abort(404);
	$file = \File::get($path);
	$type =\File::mimeType($path);
	$response = Response::make($file,200);
	$response->header("Content-Type",$type);
	return $response;
});
