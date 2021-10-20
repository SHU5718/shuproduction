<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/api', 'App\Http\Controllers\SenryuuController@make_updown');

Route::get('/create', 'App\Http\Controllers\UserController@create_account');
Route::post('/create', 'App\Http\Controllers\UserController@create_account');


Route::get('/top', 'App\Http\Controllers\UserController@user_login');
Route::post('/top', 'App\Http\Controllers\UserController@user_login');

Route::get('/logout', 'App\Http\Controllers\UserController@user_logout');

Route::get('/result', 'App\Http\Controllers\ImageCreateController@create_image');
Route::post('/result', 'App\Http\Controllers\ImageCreateController@create_image');

Route::get('/login', 'App\Http\Controllers\UserController@user_logout');

Route::get('/top', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/login', 'App\Http\Controllers\SenryuuController@login_session');
Route::get('/newuser', 'App\Http\Controllers\SenryuuController@newuser_session');
Route::get('/result', 'App\Http\Controllers\SenryuuController@result_session');

Route::get('/mypage', function(){
    return view('user');
});
Route::get('/user', function(){
    return view('user.look');
});
Route::get('/new', function(){
    return view('new');
});
Route::get('/lank', function(){
    return view('lank');
});
Route::get('/product', function(){
    return view('product');
});
Route::get('/product.look', function(){
    return view('product.look');
});

Route::get('/copyuser', function(){
    return view('copyuser');
});
