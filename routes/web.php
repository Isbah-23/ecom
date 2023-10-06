<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
    // return view('welcome');
// });
/////////////////////////////Home controller routes///////////////////////////////////////
Route::get('/', [HomeController::class, 'index'])->name('home');
//dashboard navbar links
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/tables',[HomeController::class, 'tables'])->name('tables');
Route::get('/billing',[HomeController::class, 'billing'])->name('billing');