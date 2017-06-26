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


// Route::get('/login', 'Auth\LoginController@showLoginForm' );
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout');

	Route::group([
		'as' => 'admin.',
		'prefix'=>'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index');
    Route::resource('chooseus', 'ChooseusController');
    Route::resource('galaries', 'GalariesController');
    Route::resource('homes', 'HomesController');
    Route::resource('services', 'ServicesController');
    Route::resource('testimonials', 'TestimonialsController');		
});

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/home', 'Frontend\HomesController@index');
Route::get('/chooseus', 'Frontend\ChooseusController@index');
Route::get('/galaries', 'Frontend\GalariesController@index');
Route::get('/testimonials', 'Frontend\ServicesController@index');
Route::get('/services', 'Frontend\TestimonialsController@index');

Auth::routes();
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});


