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
Route::get('/', [HomeController::class, 'index'])->name('home');//render done
//dashboard navbar links
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');//render done
Route::get('/tables',[HomeController::class, 'tables'])->name('tables');
Route::get('/billing',[HomeController::class, 'billing'])->name('billing');
Route::get('/virtual-reality',[HomeController::class, 'virtual_reality'])->name('virtual-reality');
Route::get('/rtl',[HomeController::class, 'rtl'])->name('rtl');
Route::get('/notifications',[HomeController::class, 'notifications'])->name('notifications');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile');
Route::get('/sign-in',[HomeController::class, 'sign_in'])->name('sign-in');
Route::get('/sign-up',[HomeController::class, 'sign_up'])->name('sign-up');

////////Verification/Registration and Authentication routes
Route::get('/test-email', function () {
    \Mail::raw('This is a test email.', function ($message) {
        $message->to('malikisbah@gmail.com');
        $message->subject('Test Email');
    });

    return 'Test email sent!';
});    