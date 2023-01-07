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
    return view('home');
});
Route::get('login', function () {
    return view('login');
});

Route::get('foryou', function () {
    return view('foryou');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('explore', function () {
    return view('explore');
});

Route::get('formiklan', function () {
    return view('formiklan');
});

Route::get('like', function () {
    return view('like');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('admin', function () {
    return view('admin');
});

    // Route::post('register', []{
    //     return view('detail');
    // });
