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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::post('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::post('/save-reaction-score', [App\Http\Controllers\HomeController::class, 'save_reaction_score'])->name('save-reaction-score');

// Route::get('login', function () { return view('authentications.login'); });
// Route::get('signup', function () { return view('authentications.signup'); });
// Route::get('locked', function () { return view('authentications.locked'); });
// Route::get('forgot-password', function () { return view('authentications.forgot-password'); });
// Route::get('confirm-email', function () { return view('authentications.confirm-email'); });

Route::get('/reaction-time', [App\Http\Controllers\HomeController::class, 'reaction_time'])->name('reaction-time');
Route::get('/reaction-test', [App\Http\Controllers\HomeController::class, 'reaction_test'])->name('reaction-test');
Route::post('/save-state', [App\Http\Controllers\HomeController::class, 'save_state'])->name('save-state');
Route::post('/update-statue', [App\Http\Controllers\HomeController::class, 'update_statue'])->name('update-statue');

Route::get('/visual-memory', [App\Http\Controllers\HomeController::class, 'visual_memory'])->name('visual-memory');
Route::get('/visual-test', [App\Http\Controllers\HomeController::class, 'visual_test'])->name('visual-test');
Route::get('/number-memory', [App\Http\Controllers\HomeController::class, 'number_memory'])->name('number-memory');
Route::get('/number-test', [App\Http\Controllers\HomeController::class, 'number_test'])->name('number-test');
Route::post('/insert-number-test-score', [App\Http\Controllers\HomeController::class, 'number_test_score'])->name('insert-number-test-score');
Route::get('/legal-disclaimer', [App\Http\Controllers\HomeController::class, 'legal_disclaimer'])->name('legal-disclaimer');

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/save-profile', [App\Http\Controllers\HomeController::class, 'save_profile'])->name('save-profile');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('error-404');
})->where('page','.*');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');