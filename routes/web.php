<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('login', function () { return view('authentications.login'); });
Route::get('signup', function () { return view('authentications.signup'); });
Route::get('locked', function () { return view('authentications.locked'); });
Route::get('forgot-password', function () { return view('authentications.forgot-password'); });
Route::get('confirm-email', function () { return view('authentications.confirm-email'); });

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('error-404');
})->where('page','.*');
