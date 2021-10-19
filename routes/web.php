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
Route::get('/api', 'App\Http\Controllers\PostController@index');

Route::get('/createaccountcheck', 'App\Http\Controllers\CreateAccountController@create_account');
Route::post('/createaccountcheck', 'App\Http\Controllers\CreateAccountController@create_account');


Route::get('/logincheck', 'App\Http\Controllers\LoginController@user_login');

Route::get('/createimagecheck', 'App\Http\Controllers\ImageCreateController@create_image');

Route::get('/top', function () {
    return view('top');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', function(){
    return view('result');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/newuser', function(){
    return view('newuser');
});
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
