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

    Route::get('/tables-master', [DataController::class, 'tables_master'])->name('tables-master');

    Route::get('/tables-slave1', [DataController::class, 'tables_slave1'])->name('tables-slave1');

    Route::get('/tables-slave2', [DataController::class, 'tables_slave2'])->name('tables-slave2');

    Route::get('/tables-slave3', [DataController::class, 'tables_slave3'])->name('tables-slave3');

    Route::get('/tables-data', [DataController::class, 'tables_data'])->name('index');
});

// Update profile
Route::middleware('auth')->group(function () {
    // Route to show the profile edit form (GET request)


    // Route to handle the profile update (PUT request)
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/updatePassword', [ProfileController::class, 'updatePassowrd'])->name('profile.updatePassword');

});

Route::get('/pages-login', function () {
    return view('pages-login');
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
Route::post('/api-inputdata', [NodeController::class, 'receiveData'])->name('api.input');


Route::get('/node-status', [DataController::class, 'getNodeStatus']);
Route::get('/api/soil-moisture-data', [DataController::class, 'getSoilMoistureData']);

