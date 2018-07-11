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

//FRONTEND
Route::get('/', ['uses' => 'PagesController@index']);
Route::get('/register', ['uses' => 'Front\Register\RegisterController@index']);
Route::post('/userregister', 'Front\Register\RegisterController@create');
Route::get('/login', ['uses' => 'Front\Login\LoginController@index']);
Route::post('user/login', 'Auth\UserController@login')->name('front.login.submit');
Route::get('user/logout', ['uses' => 'PagesController@userLogout']);
Route::get('/losspassword', ['uses' => 'Front\Losspassword\LosspasswordController@index']);
Route::post('/sendpassword', 'Front\Losspassword\LosspasswordController@sendpassword');

//BACKEND ADMIN
Route::get('/admin', ['uses' => 'Admin\AdminpagesController@index']);
Route::get('/admin/login', ['uses' => 'Admin\Login\AdminloginController@index']);
Route::get('/admin/adminlogin', 'Auth\AuthorController@showLoginForm');
Route::post('/login', 'Auth\AuthorController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Admin\AdminpagesController@adminLogout');
Route::get('/admin/profile', 'Admin\Profile\AdminprofileController@index');
Route::post('/admin/profileupdate/{id}', 'Admin\Profile\AdminprofileController@update');