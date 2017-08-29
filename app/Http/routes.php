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
//
//Route::get('/', function () {
//    return view('welcome');
//});

/*
 * ---------------------------------------
 * Auth Routes
 * ---------------------------------------
 */
Route::auth();
Route::group(['middleware' => ['auth']], function() {
    Route::any('/admin', 'AdminController@index');
    Route::resource('products', 'ProductsController');
});
/*
 * ---------------------------------------
 * Front End Routes
 * ---------------------------------------
 */
Route::group(['middleware' => ['web']], function() {
Route::any('/', 'SiteController@index');
Route::any('/view/{id}', ['as' => 'customer.products.show', 'uses' => 'SiteController@show']);
Route::any('/view/bid/{id}', ['as' => 'customer.products.bid', 'uses' => 'SiteController@bid']);
Route::any('/view/bid/placebid/{id}', ['as' => 'customer.products.bid.placebid', 'uses' => 'SiteController@placebid']);
});
/*
 * ******** Single Resourceful Route *****
 * todo::Group Routes
 */
