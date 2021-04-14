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

Route::get('/find', function () {
    return view('find');
});
Route::get('/find/data', function() {
    return view('findData');
});
Route::get('/find/maps', function() {
    return view('findMaps');
})->name('maps');
Route::get('/', function() {
    return view('home');
});