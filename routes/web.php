<?php
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [SiteController::class, 'home'])->name('home');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);


Route::get('/accounts', [AccountController::class, 'index'])->name('accounts');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts');
Route::post('/accounts/create', [AccountController::class, 'store'])->name('accounts');
Route::get('/accounts/{account}', [AccountController::class, 'edit']);
Route::post('/accounts/{account}', [AccountController::class, 'update']);
Route::delete('/accounts/delete/{account}', [AccountController::class, 'delete']);


Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions');
Route::post('/transactions/create', [TransactionController::class, 'store'])->name('transactions');
Route::get('/transactions/{transaction}', [TransactionController::class, 'edit']);
Route::post('/transactions/{transaction}', [TransactionController::class, 'update']);
Route::delete('/transactions/delete/{transaction}', [TransactionController::class, 'delete']);





