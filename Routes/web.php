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
$middleware = ['admin', 'web'];

foreach(user_routes() as $prefix){

    Route::group(compact('prefix', 'middleware'), function() {
        Route::resource('contacts', ContactsController::class);
    });

}
