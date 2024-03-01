<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/Orders', function () {
    return view('Orders');
});
Route::get('/Customers', function () {
    return view('Customers');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/suppliers', function () {
    return view('suppliers');
});
