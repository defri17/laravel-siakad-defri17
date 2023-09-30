<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function(){

    Route::get('home', function () {
        return view('pages.app.dashboard-siakad', ['type_menu' => 'dashboard']);
        })->name("home");

        Route::resource('users', UserController::class);
});



Route::get('/', function () {
    // return view('welcome');
    // return view('pages.app.dashboard-siakad', ['type_menu' => 'dashboard']);
    return view('pages.auth.auth-login');

});

// Route::get('/login', function () {
//     // return view('welcome');
//     return view('pages.auth.auth-login');
//     })->name("login");


// Route::get('/register', function () {
//     // return view('welcome');
//     return view('pages.auth.auth-register');
//     })->name("register");

// Route::get('/reset', function () {
//         // return view('welcome');
//         return view('pages.auth.auth-reset-password');
//         })->name("reset");

// Route::get('/forgot', function () {
//     // return view('welcome');
//     return view('pages.auth.auth-forgot-password');
//     })->name("forgot");
