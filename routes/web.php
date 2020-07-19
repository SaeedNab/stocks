<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichphp artisan make:model Admin -m

| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
   Route::get('login','AuthenticationController@login')->name('admin.auth.login_form');
   Route::get('register','AuthenticationController@register')->name('admin.auth.register_form');
    Route::post('login','AuthenticationController@login_')->name('admin.auth.login');
    Route::get('logout','AuthenticationController@logout')->name('admin.auth.logout');
    Route::get('forget_password','AuthenticationController@forgetPassword')->name('admin.auth.forget_password');
    Route::get('users','AdminController@users')->name('admin.users.users_list')->middleware('auth.admin');
    Route::get('new_users','AdminController@new_users')->name('admin.users.new_users')->middleware('auth.admin');
    Route::post('decline/user','AdminController@decline_confirmation')->name('admin.users.decline_confirm')->middleware('auth.admin');
    Route::post('accept/user','AdminController@accept_confirmation')->name('admin.users.accept_confirm')->middleware('auth.admin');
    Route::post('new_users','AdminController@new_users')->name('admin.users.new_users')->middleware('auth.admin');
    Route::get('admins','AdminController@admins')->name('admin.admins.admin_list')->middleware('auth.admin');
    Route::get('create_admin','AdminController@create_admin')->name('admin.admins.create_admin')->middleware('auth.admin');
    Route::post('store_admin','AdminController@store_admin')->name('admin.admins.store_admin')->middleware('auth.admin');
    Route::get('update_admin/{admin}','AdminController@updateAdmin')->name('admin.admins.update_admin')->middleware('auth.admin');
    Route::post('edit_admin/{admin}','AdminController@editAdmin')->name('admin.admins.edit_admin')->middleware('auth.admin');
    Route::get('delete_admin/{admin}','AdminController@deleteAdmin')->name('admin.admins.delete_admin')->middleware('auth.admin');

    Route::get('index','AdminController@index')->name('admin.index')->middleware('auth.admin');
   Route::post('login','AuthenticationController@login_')->name('admin.auth.login');
   Route::get('logout','AuthenticationController@logout')->name('admin.auth.logout');
   Route::post('register','AuthenticationController@register_')->name('admin.auth.register');
   Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');

});
Route::group(['prefix'=>'user','namespace'=>'user'],function (){
    Route::get('login','AuthenticationController@login')->name('user.auth.login_form');
    Route::get('register','AuthenticationController@register')->name('user.auth.register_form');
    Route::post('login','AuthenticationController@login_')->name('user.auth.login');
    Route::get('logout','AuthenticationController@logout')->name('user.auth.logout');
    Route::get('forget_password','AuthenticationController@forgetPassword')->name('user.auth.forget_password');
    Route::post('register','AuthenticationController@register_')->name('user.auth.register');
    Route::get('dashboard','UserController@dashboard')->name('user.dashboard')->middleware('auth.user');
    Route::get('show_top','UserController@showTop')->name('user.show_top')->middleware('auth.user');
    Route::get('show_below','UserController@showBelow')->name('user.show_below')->middleware('auth.user');
});
