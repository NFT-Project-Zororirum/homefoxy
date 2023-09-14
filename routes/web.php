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
Route::view('vip-gate', 'vipgate');
Route::view('about','about');
Route::get('/assets-management', function () {
    return view('assetsManagement');
});
Route::get('/web3wallet', function () {
    return view('web3wallet');
});
