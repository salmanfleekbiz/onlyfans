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
Route::get('/notification', ['uses' => 'Front\Notification\NotificationController@index']);
Route::get('/notification/likes', ['uses' => 'Front\Notification\NotificationController@likes_list']);
Route::get('/notification/interaction', ['uses' => 'Front\Notification\NotificationController@interaction_list']);
Route::get('/notification/subscriber', ['uses' => 'Front\Notification\NotificationController@subscriber_list']);
Route::get('/notification/tipped', ['uses' => 'Front\Notification\NotificationController@tipped_list']);
Route::get('/notification/pricechange', ['uses' => 'Front\Notification\NotificationController@pricechange_list']);
Route::get('/notification/alerts', ['uses' => 'Front\Notification\NotificationController@alerts_list']);
Route::get('/post/create', ['uses' => 'Front\Posts\PostsController@index']);
Route::get('/message', ['uses' => 'Front\Messages\MessagesController@index']);
Route::get('/profile', ['uses' => 'Front\Profile\ProfileController@index']);
Route::get('/fans', ['uses' => 'Front\Fans\FansController@index']);
Route::get('/fans/active', ['uses' => 'Front\Fans\FansController@active_list']);
Route::get('/fans/expire', ['uses' => 'Front\Fans\FansController@expired_list']);
Route::get('/following', ['uses' => 'Front\Following\FollowingController@index']);
Route::get('/following/active', ['uses' => 'Front\Following\FollowingController@active_list']);
Route::get('/following/expire', ['uses' => 'Front\Following\FollowingController@expired_list']);
Route::get('/addbank', ['uses' => 'Front\Addbank\AddbankController@index']);
Route::get('/addcard', ['uses' => 'Front\Addcard\AddcardController@index']);
Route::get('/setting', ['uses' => 'Front\Setting\SettingController@index']);
Route::get('/advancedsetting', ['uses' => 'Front\Setting\SettingController@advancedsetting']);
Route::get('/statments', ['uses' => 'Front\Statements\StatementsController@index']);

//BACKEND ADMIN
Route::get('/admin', ['uses' => 'Admin\AdminpagesController@index']);
Route::get('/admin/login', ['uses' => 'Admin\Login\AdminloginController@index']);
Route::get('/admin/adminlogin', 'Auth\AuthorController@showLoginForm');
Route::post('/login', 'Auth\AuthorController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Admin\AdminpagesController@adminLogout');
Route::get('/admin/profile', 'Admin\Profile\AdminprofileController@index');
Route::post('/admin/profileupdate/{id}', 'Admin\Profile\AdminprofileController@update');