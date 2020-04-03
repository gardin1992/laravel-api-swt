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
});

Route::group([
    'prefix' => 'admin'
], function() {

    Route::get('/login', function () { return view('admin/login'); });
    Route::get('/register', function () { return view('admin/register'); });
    Route::get('/', function () { return view('admin/dashboard'); });
});

Route::group([
    'prefix' => 'admin-geral'
], function() {

    Route::get('/login', function () { return view('admin/login'); });
    Route::get('/', function () { return view('admin/dashboard'); });
});