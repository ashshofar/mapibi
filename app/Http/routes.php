<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
	'prefix' => '/admin'
], function(){
	Route::get('/title',[
		'uses' => 'TitleController@getIndex',
		'as' => 'admin.title.index'
	]);

	Route::get('/title/create',[
		'uses' => 'TitleController@getCreate',
		'as' => 'admin.title.create'
	]);

	Route::post('/title/create', [
		'uses' => 'TitleController@postCreate',
		'as' => 'admin.title.post.create'
	]);

	Route::get('/title/edit/{title_id}',[
		'uses' => 'TitleController@getUpdate',
		'as' => 'admin.title.edit'
	]);

	Route::post('/title/edit/update',[
		'uses' => 'TitleController@postUpdate',
		'as' => 'admin.title.post.edit'
	]);

	Route::get('/title/delete/{title_id}', [
		'uses' => 'TitleController@getDelete',
		'as' => 'admin.title.delete'
	]);

	Route::get('/data/{title_id}', [
		'uses' => 'DataController@getIndex',
		'as' => 'admin.data.index'
	]);

	Route::get('/data/edit/{data_id}',[
		'uses' => 'DataController@getUpdate',
		'as' => 'admin.data.edit'
	]);

	Route::post('/data/edit/update',[
		'uses' => 'DataController@postUpdate',
		'as' => 'admin.data.post.edit'
	]);

});