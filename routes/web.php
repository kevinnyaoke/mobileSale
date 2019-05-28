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
Route::get('adminlogin', 'PagesController@adminlogin')->name('adminlogin');
Route::get('stafflogin', 'PagesController@stafflogin')->name('stafflogin');
Route::get('homepage', 'PagesController@homepage')->name('homepage');

//Admin action to start here
Route::group([
    'prefix'=>'admin'
], function () {
    Route::post('adminlogin', 'PagesController@adminvalidatelogin')->name('admin.login');
    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::post('/logout', 'PagesController@adminlogout')->name('admin.logout');
    Route::get('addemployee', 'AdminController@addemployee')->name('admin.addemployee');
    Route::post('addemployee', 'AdminController@submitemployee')->name('admin.submitemployee');
    Route::get('employees', 'AdminController@viewemployee')->name('admin.viewemployee');
    Route::get('addphone', 'AdminController@addphone')->name('admin.addphone');
    Route::post('submit', 'AdminController@submitphone')->name('admin.submitphone');
    Route::get('phones', 'AdminController@viewphones')->name('admin.viewphones');
    Route::post('edituser', 'AdminController@updateuser')->name('admin.updateuser');
    Route::post('editphone', 'AdminController@updatephone')->name('admin.updatephone');
    Route::get('resetpassword', 'AdminController@resetpassword')->name('admin.resetpassword');
    Route::post('resetpassword', 'AdminController@updatepassword')->name('admin.updatepassword');
    Route::get('view customer', 'AdminController@viewcustomer')->name('admin.viewcustomer');
    Route::get('view customer', 'AdminController@viewcustomer')->name('admin.viewcustomer');

    Route::get('/user/delete/{id}', [
        'uses'=>'AdminController@deleteuser',
        'as'=>'admin.deleteuser',
    ]);
    Route::get('/phone/delete/{id}', [
        'uses'=>'AdminController@deletephone',
        'as'=>'admin.deletephone',
    ]);
    Route::get('/user/edit/{id}', [
        'uses'=>'AdminController@edituser',
        'as'=>'admin.edituser',
    ]);
    Route::get('/phone/edit/{id}', [
        'uses'=>'AdminController@editphone',
        'as'=>'admin.editphone',
    ]);

});

Route::group([
    'prefix'=>'user'
], function () {
    Route::get('phones', 'UserController@viewphones')->name('user.viewphones');
    Route::get('password', 'UserController@resetpassword')->name('user.resetpassword');
    Route::post('password', 'UserController@updatepassword')->name('user.updatepassword');
    Route::post('phonesubmit', 'UserController@phonesubmit')->name('user.phonesubmit');
    Route::get('view customer', 'UserController@viewcustomer')->name('user.viewcustomer');

    Route::get('/phone/sell/{id}', [
        'uses'=>'UserController@sell',
        'as'=>'user.sell',
    ]);

});
