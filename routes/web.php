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
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/test', function () {
    return view('blog-detail');
});
Route::view('vip-gate', 'vipgate');
Route::get('/assets-management', function () {
    return view('assetsManagement');
});
Route::get('/web3wallet', function () {
    return view('web3wallet');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/tax', function () {
    return view('tax');
});
