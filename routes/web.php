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

//Route::resource('admin/user','AdminUserController');


//Route::get('/admin',function (){
//
//    return view('layouts.admin');
//});

Route::get('/admin',function (){

    return view('admin.index');
});
Route::get('admin/user','ForUser@index');
Route::Post('admin/user/store','ForUser@store')->name('user.store');
Route::get('admin/user/create_user','ForUser@create')->name('user.create');
Route::get('admin/user/edit_user/{user}','ForUser@edit');
Route::post('admin/user/update_user/{user}','ForUser@update');
Route::get('admin/user/delete_user/{user}','ForUser@destroy')->name('user.delete');
