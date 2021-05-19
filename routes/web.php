<?php

use Illuminate\Support\Facades\Route;
use App\Models\Transaction;
use App\Models\Dompets;

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

Auth::routes();
Route::get('/', [App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/find', [App\Http\Controllers\Controller::class, 'find'])->name('find');
Route::get('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'findMaps'])->name('findMaps');
Route::post('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'transactionProcess'])->name('transactionProcess');
Route::get('/QRCode', [App\Http\Controllers\Controller::class, 'QRCode'])->name('QRCode');
Route::get('/Receipt', [App\Http\Controllers\Controller::class, 'Receipt'])->name('Receipt');

// Topup
Route::get('/topUp', [App\Http\Controllers\Controller::class, 'topUp'])->name('topUp');
Route::post('/topUp_process', [App\Http\Controllers\Controller::class, 'topUp_process'])->name('topUp_process');
Route::get('/verification', [App\Http\Controllers\Controller::class, 'verification'])->name('verification');
Route::get('/successTopUp', [App\Http\Controllers\Controller::class, 'successTopUp'])->name('successTopUp');

// Admin
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/screening', function(){
     $transaction = Transaction::all();
     return view('admin.screening', compact('transaction'));
})->name('admin.screening');