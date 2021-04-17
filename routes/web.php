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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/find', [App\Http\Controllers\Controller::class, 'find'])->name('find');
Route::get('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'findMaps'])->name('findMaps');
Route::post('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'transactionProcess'])->name('transactionProcess');
Route::get('/QRCode', [App\Http\Controllers\Controller::class, 'QRCode'])->name('QRCode');
Route::get('/Receipt', [App\Http\Controllers\Controller::class, 'Receipt'])->name('Receipt');



// Route::get('/find/maps', function() {
//     return view('findMaps');
// })->name('maps');

// Route::get('/find', function () {
//     return view('find');
// });

// Route::get('/find/data', function() {
//     return view('findData');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
