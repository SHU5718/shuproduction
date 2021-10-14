<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/top', function(){
    return view('top');
});
Route::get('/result', function(){
    return view('result');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/new', function(){
    return view('new');
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