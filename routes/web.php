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

Route::get('/dashboard', function(){
	return view('admin.dashboard');
});


Route::get('/login', 'Auth\LoginController@showLoginForm' );
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');

	Route::group([
		'as' => 'admin.',
		'prefix'=>'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth']], function () {
    Route::resource('chooseus', 'ChooseusController');
    Route::resource('galaries', 'GalariesController');
    Route::resource('homes', 'HomesController');
    Route::resource('services', 'ServicesController');
    Route::resource('testimonials', 'TestimonialsController');		
});

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/home', 'HomesController@index');
Route::get('/chooseus', 'HomesController@index');
Route::get('/galaries', 'HomesController@index');
Route::get('/testimonials', 'HomesController@index');
Route::get('/services', 'HomesController@index');

	















