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

Route::resource('assetsallocation', 'Asset_allocationController');
Route::resource('assetsdetail', 'Asset_detailController');
Route::resource('assetsgroup', 'Asset_groupController');
Route::resource('audittrail', 'Audit_trailController');
Route::resource('branch', 'BranchController');
Route::resource('engineer','engineerController');
Route::resource('fault','FaultController');
Route::resource('faultlog','Fault_logController');
Route::resource('part','PartController');
Route::resource('state','StateController');
Route::resource('status','StatusController');



// Route::prefix('assetsallocation')->group( function () {
//     Route::get('', 'Asset_allocationController@index');
//     Route::get('show/{id}', 'Asset_allocationController@show');
//     Route::post('store', 'Asset_allocationController@store');
//     Route::put('update/{id}', 'Asset_allocationController@update');
//     Route::put('delete/{id}', 'Asset_allocationController@destroy');

// });



// Route::get('tasks', 'TaskController@index');
// Route::get('tasks/{id}', 'TaskController@show');
// Route::post('tasks', 'TaskController@store');
// Route::put('tasks/{id}', 'TaskController@update');
// Route::delete('tasks/{id}', 'TaskController@delete');

// Route::group(['prefix'=>'products'],function(){
//     Route::apiResource('/{product}/reviews', 'ReviewController');
// });



