<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProfileController; // Make sure to import ProfileController
use App\Models\User;

//guest middleware
Route::get('/', function () {
    return view('lading-page');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.post');
});

//auth middleware group
Route::middleware(['auth'])->group(function () {
    //logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/users-profile', [UserController::class, 'profile'])->name('users-profile');  // Show user profile

    Route::get('/index', [DataController::class, 'index'])->name('index');
});

// Update profile
Route::middleware('auth')->group(function () {
    // Route to show the profile edit form (GET request)
    
    
    // Route to handle the profile update (PUT request)
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/pages-login', function () {
    return view('pages-login');
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

//Api
//InputData
Route::post('/api-inputdata', [NodeController::class, 'receiveData'])->name('api.input') ;

