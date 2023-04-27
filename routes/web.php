<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

    
});

Route::get('/',[StaticController::class,'accueil'])->name("home.accueil");
Route::get('home',[StaticController::class,'home'])->name("home.home");
Route::get('knowldege_base',[StaticController::class,'knowldege'])->name("home.base");
Route::get('new_ticket',[StaticController::class,'new_ticket'])->name("home.new_ticket");


