<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/', function () { return view('auth.login'); });
Route::view('home','dashboard')->middleware('auth');

Route::get('/home', function () { return view('dashboard'); })->name('dashboard')->middleware('auth');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/resend-email', function () { return view('dashboard'); })->name('verification.resend');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::get('/password/edit', [HomeController::class, 'changePassword'])->name('change.password');
Route::post('/password/update', [HomeController::class, 'updatePassword'])->name('update.password');

Route::get('/crud', function () { return view('crud.employeeIndex'); })->name('crud.manage')->middleware('verified');
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/fetchAll', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');
