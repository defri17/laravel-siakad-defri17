<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    // return view('welcome');
    return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
    });

Route::get('/login', function () {
    // return view('welcome');
    return view('pages.auth-login');
    })->name("login");

    
Route::get('/register', function () {
    // return view('welcome');
    return view('pages.auth-register');
    })->name("register");

Route::get('/reset', function () {
        // return view('welcome');
        return view('pages.auth-reset-password');
        })->name("reset");

Route::get('/forgot', function () {
    // return view('welcome');
    return view('pages.auth-forgot-password');
    })->name("forgot");
    