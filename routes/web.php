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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// dashboard
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function() {

    Route::get('/', ['as' => 'index', 'uses' => function() {
        return 'ok';
    }]);

    // Route::get('dashboard', ['as' => 'dashboard', 'uses' => function () {
    //     return view('vendor.medusa.admin.profile')->with(['user' => Auth::user(), 'title' => 'Admin']);
    // }]);

   // Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::group(['prefix' => 'bills', 'as' => 'bills.'], function() {
        Route::get('/', ['as' => 'index', 'uses' => 'BillsController@index']);

        Route::group(['prefix' => '/{id}', 'as' => 'bill.'], function() {
            Route::get('/', ['as' => 'view', 'uses' => 'BillsController@view']);
        });

        
    });
});

Route::get('/generate', 'RPCController@getMasterNode');
Route::get('/address/{id}', ['as' => 'address', 'uses' => 'RPCController@checkReceived']);
Route::get('/check/{id}', 'ApiController@checkPaidInterface');
Route::group(['middleware' => 'api_user', 'prefix' => 'api/v1', 'as' => 'api.'], function() {
    Route::get('/currency', ['as' => 'currency', 'uses' => 'ApiController@list_currency']);

});

Route::group(['prefix' => 'api/web/v1', 'as' => 'api_web.'], function() {
    Route::get('/check-paid/{id}', ['as' => 'check_paid', 'uses' => 'ApiController@checkPaid']);

});

Route::get('/g', function() {
	return view('base');
});
