<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustController;
use App\Http\Controllers\CustLoginController;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// User module //
Route::get('/loginMe', [AuthController::class, 'index'])->middleware('guest');
Route::post('/loginMe', [AuthController::class, 'auth'])->middleware('guest');
Route::post('/logoutMe', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/customList', CustController::class)->middleware('auth');
Route::resource('/customList/{username}/edit', CustController::class)->middleware('auth');

// login customer
Route::get('/', [CustLoginController::class, 'index'])->middleware('guest');

Route::get('/home', function() {
    return view('home',[
        'user' => Auth::guard('customer')->user()
    ]);
})->middleware('cust');