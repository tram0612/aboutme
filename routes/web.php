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
Route::namespace('Aboutme')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/',[
	'uses'=>'AboutmeIndexController@index',
	'as'=>'aboutme.index',
	]);
	Route::get('/about',[
		'uses'=>'AboutmeAboutController@about',
		'as'=>'aboutme.about',
	]);
	Route::get('/news',[
		'uses'=>'AboutmeNewsController@news',
		'as'=>'aboutme.news',
	]);
	Route::get('/detail',[
		'uses'=>'AboutmeNewsController@detail',
		'as'=>'aboutme.detail',
	]);
	Route::get('/project',[
		'uses'=>'AboutmeProjectController@project',
		'as'=>'aboutme.project',
	]);
	Route::get('/contact',[
		'uses'=>'AboutmeContactController@contact',
		'as'=>'aboutme.contact',
	]);
});

Route::namespace('Admin')->group(function () {
	Route::get('/admin',[
		'uses'=>'AdminController@index',
		'as'=>'admin.index',
	]);
	Route::get('/admin/edit',[
		'uses'=>'AdminController@edit',
		'as'=>'admin.edit',
	]);
	
});
