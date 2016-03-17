<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>About Easybooking Project</h1>';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    // Test
    Route::get('/authtest', array('middleware' => 'auth.basic', function()
    {
        return 'You are Welcome!';
    }));
    
    //Versioning
    Route::group(array('prefix' => 'api/v1', 'middleware' => 'auth.basic'), function()
    {
        Route::resource('store', 'StoreController');
    });
});
