<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarController;


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

/**
 * Setup routes
 * This is responsible for setting up the application by
 * creating an admin user if no user exists.
 */
Route::prefix('set-up')->middleware('setup.done')->name('setup.')->group(function () {
    Route::get('', [ SetupController::class, 'create' ])->name('create');
    Route::post('', [ SetupController::class, 'store' ])->name('store');
});

Route::middleware('setup.need')->group(function () {

    /**
     * Users routes
     * This routes are responsable for user management including authentication,
     * account creation (stored as client) and logout process
     * Log in and sign up uses require the user to don't be authentified
     * While log out process needs the users to be authentified => 'auth' middlware
     */
    Route::name('user.')->group(function () {

        Route::prefix('login')->group(function () {
            Route::get('', [ UserController::class, 'login' ])->name('login');
            Route::post('', [ UserController::class, 'authenticate' ])->name('auth');
        });
        Route::prefix('sign-up')->group(function () {
            Route::get('', [ UserController::class, 'create' ])->name('create');
            Route::post('', [ UserController::class, 'store'])->name('store');
        });
        Route::get('logout', [ UserController::class, 'logout' ])->name('logout')->middleware('auth');
    });

    /**
     * This routes are responsable for user email confirmations
     */
    Route::prefix('email')->middleware('auth')->name('verification.')->group(function () {
        Route::get('verify/{id}/{hash}', [ EmailController::class, 'verify' ])->name('verify');
        Route::get('resend-verification', [ EmailController::class, 'resend' ])->name('send');
    });

    /**
     *
     *
     */
    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        Route::get('/', function () { return view('dashboard.home.index'); })->name('index');

    });


    /**
     *    les routes de l'horaire
     *
     */

    Route::get('/calendar',[CalendarController::class,'calendar'])->name("calendar");
    Route::get('/newCalendar',[CalendarController::class,'newCalendar'])->name("newCalendar");
    Route::get('calendar/edit/{id}', [ CalendarController::class,'edit']);
    Route::put('/calendar/{id}',[ CalendarController::class,'update'])->name('update');


        // consulter les horaires
    Route::get('/consulter/{id}',[ CalendarController::class,'consulter'])->name('consulter');


    Route::delete('/calendar/{id}', [ CalendarController::class,'destroy'])->name('calendar.destroy');


    Route::post('/newCalendar/store1',[CalendarController::class,'store1'])->name("store1");
    Route::get('/newCalendar/store2',[CalendarController::class,'store2'])->name("store2");

    Route::get('/test',[CalendarController::class,'testHoraire'])->name("test");

    /**
     *
     *
     */

    Route::get('/',[StaticController::class,'accueil'])->name("home.accueil");
    Route::get('home',[StaticController::class,'home'])->name("home.home");
    Route::get('knowldege_base',[StaticController::class,'knowldege'])->name("home.base");
    Route::get('new_ticket',[StaticController::class,'new_ticket'])->name("home.new_ticket");


});


/**
 *
 *  Consulter les agent
 *
 */

Route::get('/consultAgent',[AgentController::class,'consultAgent'])->name('consultAgent');
