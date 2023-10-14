<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\Auth\CustomRegisterController;
use App\Http\Controllers\Auth\CustomVerificationController;
// Use Laravel's built-in email verification routes
//Auth::routes(['verify' => true]);
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
// Login/Registration Routes
Route::get('/login', [CustomLoginController::class, 'login'])->name('login');
Route::post('/login', [CustomLoginController::class, 'loginSubmit'])->name('login.submit');
Route::post('/logout', [CustomLoginController::class, 'logout'])->name('logout');
Route::get('/register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [CustomRegisterController::class, 'register']);

////////Verification/Registration and Authentication routes
Route::get('/test-email', function () {
    \Mail::raw('This is a test email.', function ($message) {
        $message->to('malikisbah@gmail.com');
        $message->subject('Test Email');
    });

    return 'Test email sent!';
});
//////To create new roles////
Route::get('/create-roles',[HomeController::class, 'createRoles'])->name('create-roles');

