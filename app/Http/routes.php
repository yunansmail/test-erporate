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

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProdukController@getAddToCart',
	'as' => 'produk.addToCart'
	]);


Route::group(['middlewareGroup' => ['web']], function() {
	Route::auth();
	Route::get('findSubCatName', 'ProdukController@findSubCatName');
	Route::resource('produk', 'ProdukController');
	Route::resource('user', 'UserController');

	Route::get('register', function() {
		return redirect('/');
	});
});
