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

// User
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'homeSuccess'])->name('homeSuccess');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'homeSuccess'])->name('homeSuccess');
Route::get('/profile/{id}', [App\Http\Controllers\Controller::class, 'profile'])->name('profile');
Route::get('/profile/edit/{id}', [App\Http\Controllers\Controller::class, 'profileEdit'])->name('profile-edit');

Route::get('/find', [App\Http\Controllers\Controller::class, 'find'])->name('find');
Route::get('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'findMaps'])->name('findMaps');
Route::post('/findMaps/{id}', [App\Http\Controllers\Controller::class, 'transactionProcess'])->name('transactionProcess');
Route::get('/QRCode', [App\Http\Controllers\Controller::class, 'QRCode'])->name('QRCode');
Route::get('/Receipt', [App\Http\Controllers\Controller::class, 'Receipt'])->name('Receipt');
Route::get('/history', [App\Http\Controllers\Controller::class, 'transaction'])->name('transaction');
Route::get('/transaction', [App\http\Controllers\Controller::class, 'transaction_view'])->name('screening');
Route::post('/transaction', [App\Http\Controllers\Controller::class, 'user_orderProcess'])->name('orderProcess');
Route::get('/confirmation', [App\http\Controllers\Controller::class, 'confirmation'])->name('confirmation');
Route::get('/charge-status', [App\http\Controllers\Controller::class, 'chargeStatus'])->name('chargeStatus');
Route::post('/charge-status', [App\http\Controllers\Controller::class, 'addDompet'])->name('addDompet');

// Topup
Route::get('/topUp', [App\Http\Controllers\Controller::class, 'topUp'])->name('topUp');
Route::post('/topUp_process', [App\Http\Controllers\Controller::class, 'topUp_process'])->name('topUp_process');
Route::get('/verification', [App\Http\Controllers\Controller::class, 'verification'])->name('verification');
Route::get('/successTopUp', [App\Http\Controllers\Controller::class, 'successTopUp'])->name('successTopUp');

// Admin
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/screening', [App\http\Controllers\Controller::class, 'screening'])->name('admin.screening')->middleware('is_admin');
Route::get('admin/history', [App\http\Controllers\Controller::class, 'history'])->name('admin.history')->middleware('is_admin');
Route::get('admin/feedback', [App\http\Controllers\Controller::class, 'feedback_list'])->name('admin.feedback')->middleware('is_admin');
Route::get('admin/user', [App\http\Controllers\Controller::class, 'user'])->name('admin.user')->middleware('is_admin');
Route::get('admin/edit/{id}', [App\http\Controllers\Controller::class, 'update_user'])->name('update.user')->middleware('is_admin');
Route::post('admin/edit/{id}', [App\http\Controllers\Controller::class, 'update_user_process'])->name('update.user.process')->middleware('is_admin');
Route::get('admin/d2d', [App\http\Controllers\Controller::class, 'd2d'])->name('d2d')->middleware('is_admin');
Route::post('admin/orderProcess', [App\Http\Controllers\Controller::class, 'orderProcess'])->name('admin.orderProcess')->middleware('is_admin');

// Feedback
Route::get('feedback', [App\Http\Controllers\Controller::class, 'feedback'])->name('feedback');
Route::post('feedback', [App\Http\Controllers\Controller::class, 'feedback_process'])->name('feedback_process');