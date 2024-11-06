<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NodeController;
use App\Http\Controllers\UserController;
use App\Models\User;

//guest midlleware
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');
});



//auth midlleware group
Route::middleware(['auth'])->group(function () {
    //logouy
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('lading-page');
});
Route::get('/pages-login', function () {
    return view('pages-login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/tables-data', function () {
    return view('tables-data');
});
Route::get('/tables-slave1', function () {
    return view('tables-slave1');
});
Route::get('/tables-slave2', function () {
    return view('tables-slave2');
});
Route::get('/tables-slave3', function () {
    return view('tables-slave3');
});
Route::get('/charts-apexcharts', function () {
    return view('charts-apexcharts');
});
Route::get('/charts-chartjs', function () {
    return view('charts-chartjs');
});
Route::get('/charts-echarts', function () {
    return view('charts-echarts');
});
Route::get('/pages-error-404', function () {
    return view('pages-error-404');
});
Route::get('/pages-login', function () {
    return view('pages-login');
});
Route::get('/pages-register', function () {
    return view('pages-register');
});
Route::get('/users-profile', function () {
    return view('users-profile');
});

//Api
//InputData
Route::post('/api-inputdata', [NodeController::class, 'receiveData'])->name('api.input') ;

