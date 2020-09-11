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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Anya Geraldine';
    return view('about', ['nama' => $nama]);
});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
