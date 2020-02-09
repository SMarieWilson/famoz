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
    return view('home');
});

Route::get('/:username', function () {
    return view('home');
});

Route::get('/:username/videos', function () {
    return view('home');
});

Route::get('/video/{test}', function () {
    return view('media/video');
});
