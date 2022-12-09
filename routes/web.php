<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TransactionController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [OrderController::class], 'index'); //index function
Route::get('/products', [ProductController::class, 'index']); //index function
Route::get('/suppliers', [SupplierController::class, 'index']); //index function
Route::get('/users', [UserController::class, 'index']); //index function
Route::get('/companies', [CompanyController::class], 'index'); //index function
Route::get('/transactions', [transactionController::class], 'index'); //index function

//user
Route::post('addUser', [UserController::class, 'AddUser']);