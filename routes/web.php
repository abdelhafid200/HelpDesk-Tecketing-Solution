<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\EmailController;


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

Route::get('set-up', [ SetupController::class, 'create' ])->name('setup.create');
Route::post('set-up', [ SetupController::class, 'store' ])->name('setup.store');


Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/', function () {
        return view('dashboard.home.index');
    })->name('index');
    
    
});

// Verify email routes
Route::prefix('email')->name('verification.')->group(function () {
    Route::get('verify/{id}/{hash}', [ EmailController::class, 'verify' ])->name('verify');
    Route::get('resend-verification', [ EmailController::class, 'resend' ])->name('send');
});

Route::get('/',[StaticController::class,'accueil'])->name("home.accueil");
Route::get('home',[StaticController::class,'home'])->name("home.home");
Route::get('knowldege_base',[StaticController::class,'knowldege'])->name("home.base");
Route::get('new_ticket',[StaticController::class,'new_ticket'])->name("home.new_ticket");


