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
    return view('index');
})->name('/');
Route::get('/page', function () {
    return view('page');
});
Route::get('/admin',function(){
	return view('admin/index');
});
Route::get('/dang-ky','Auth\RegisterController@showRegistrationForm');
Route::post('/dang-ky','Auth\RegisterController@saveUser');
Route::get('/dang-nhap','Auth\LoginController@showLogin');
Route::post('/dang-nhap','Auth\LoginController@login');
Route::get('/dang-xuat','Auth\LogoutController@logout');
