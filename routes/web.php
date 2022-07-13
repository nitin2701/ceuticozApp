<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

/*
Route::get('/', function () {
    return redirect(route('home'));
});
*/

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
            Route::view('/','admin.auth.login');
            Route::view('/login','admin.auth.login')->name('login');
            
            Route::view('/password/reset','admin.auth.passwords.email')->name('password.request');
            Route::post('/adminlogin',[App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('authentication');
            Route::post('/password/email',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
             Route::get('/password/reset',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
            Route::get('password/reset/{token}',[App\Http\Controllers\Admin\Auth\ResetPasswordController::class,'showResetForm'])->name('reset');
             Route::post('/password/update',[App\Http\Controllers\Admin\Auth\ResetPasswordController::class,'reset'])->name('password.update');
    });  
    Route::middleware(['auth:admin'])->group(function(){
            Route::get('/home',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('home');
            Route::post('/logout',[App\Http\Controllers\Admin\AdminController::class,'logout'])->name('logout');
        
            Route::resources([
                'group' => App\Http\Controllers\Admin\GroupController::class,
        ]);
           // Route::get('/profile',[App\Http\Controllers\Admin\AdminController::class,'showProfile'])->name('profile');
           // Route::patch('/profile',[App\Http\Controllers\Admin\AdminController::class,'updateProfile'])->name('profile.update');
           // Route::post('/deleteHeroImage', [App\Http\Controllers\Admin\EventController::class, 'deleteHeroImage'])->name('deleteHeroImage');
    });
});