<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('assets', 'AssetController');

/* Route::prefix('assets')->group( function () {
    Route::get('', 'AssetController@index');
    Route::get('show/{id}', 'AssetController@show');
    Route::post('store', 'AssetController@store');
    Route::put('update/{id}', 'AssetController@update');
    Route::put('delete/{id}', 'AssetController@destroy');

}); */



// Route::get('tasks', 'TaskController@index');
// Route::get('tasks/{id}', 'TaskController@show');
// Route::post('tasks', 'TaskController@store');
// Route::put('tasks/{id}', 'TaskController@update');
// Route::delete('tasks/{id}', 'TaskController@delete');

// Route::group(['prefix'=>'products'],function(){
//     Route::apiResource('/{product}/reviews', 'ReviewController');
// });



