<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController as authCtrl;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CattleController;

/* Address support */
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazillaController;
use App\Http\Controllers\ThanaController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\PostofficeController;
use App\Http\Controllers\ZoneController;

/* /Address support */

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

/*******************Basic Routes Start****************************************/
Route::group(['middleware'=>'UnknownUser'],function(){
    Route::get('/', [authCtrl::class, 'signInForm'])->name('default');
    Route::get('/login', [authCtrl::class, 'signInForm'])->name('login');
    Route::get('/sign-in', [authCtrl::class, 'signInForm'])->name('signin');
    Route::post('/sign-in', [authCtrl::class, 'signIn'])->name('signin.varify');

    Route::get('/sign-up', [authCtrl::class, 'signUpForm'])->name('signup');
    Route::post('/sign-up', [authCtrl::class, 'signUpStore'])->name('signUpStore');

    Route::get('/forget-password', [authCtrl::class, 'forgetForm'])->name('forget');
});

Route::get('/logout', [authCtrl::class, 'logout'])->name('logout');

/* superadmin group */
Route::group(['middleware'=>'isSuperadmin'],function(){
    Route::prefix('superadmin')->group(function(){
        
        Route::get('/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');
        Route::resource('users', UserController::class);

        Route::resource('cattle', CattleController::class, ['names' => 'superadmin.cattle']);
        Route::get('/cattle_export', [CattleController::class, 'cattle_export'])->name('superadmin.cattle_export');
        
        
        /* address support */
        Route::resource('country', CountryController::class, ['names' => 'superadmin.country']);
        Route::resource('division', DivisionController::class, ['names' => 'superadmin.division']);
        Route::resource('district', DistrictController::class, ['names' => 'superadmin.district']);
        Route::resource('upazilla', UpazillaController::class, ['names' => 'superadmin.upazilla']);
        Route::resource('thana', ThanaController::class, ['names' => 'superadmin.thana']);
        Route::resource('village', VillageController::class, ['names' => 'superadmin.village']);
        Route::resource('postoffice', PostofficeController::class, ['names' => 'superadmin.postoffice']);
        Route::resource('zone', ZoneController::class, ['names' => 'superadmin.zone']);
        
    });
});

/* admin group */
Route::group(['middleware'=>'isAdmin'],function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    });
});

/* user group */
Route::group(['middleware'=>'isUser'],function(){
    Route::prefix('user')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');

    });
});

/*******************Basic Routes Ends****************************************/