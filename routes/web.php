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


Route::get('/logincheck', 'App\Http\Controllers\UserController@user_login');
Route::post('/logincheck', 'App\Http\Controllers\UserController@user_login');

Route::get('/logout', 'App\Http\Controllers\UserController@user_logout');

Route::get('/result', 'App\Http\Controllers\ImageCreateController@create_image');
Route::post('/result', 'App\Http\Controllers\ImageCreateController@create_image');
Route::get('/upload', 'App\Http\Controllers\ImageCreateController@image_upload');
Route::post('/upload', 'App\Http\Controllers\ImageCreateController@image_upload');
Route::get('/delete', 'App\Http\Controllers\ImageCreateController@image_delete');
Route::post('/delete', 'App\Http\Controllers\ImageCreateController@image_delete');
Route::get('/new', 'App\Http\Controllers\ImageCreateController@image_new');


Route::get('/login', 'App\Http\Controllers\UserController@user_logout');

Route::get('/like', 'App\Http\Controllers\LikeController@like');
Route::post('/like', 'App\Http\Controllers\LikeController@like');
Route::get('/show', 'App\Http\Controllers\LikeController@show');
Route::post('/show', 'App\Http\Controllers\LikeController@show');
Route::get('/total', 'App\Http\Controllers\LikeController@total');
Route::post('/total', 'App\Http\Controllers\LikeController@total');

Route::get("image-upload", 'App\Http\Controllers\ImageUploadController@image-upload')->name("img.upload");
Route::post("imgstore", 'App\Http\Controllers\ImageUploadController@imagestore')->name("img.store");

//ページ作る度に追加してください。
Route::get('/top', 'App\Http\Controllers\SenryuuController@first_session');
Route::get('/login', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/newuser', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/result', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/message_top', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/message_result', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/user', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/test', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/lank', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/product', 'App\Http\Controllers\SenryuuController@default_session');
Route::get('/copyuser', 'App\Http\Controllers\SenryuuController@default_session');
