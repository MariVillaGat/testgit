<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});

Route::get('/login', function () {
    return Socialite::driver('github')->redirect();
})->name('login');

Route::get('/login/callback', function () {
    $user = Socialite::driver('github')->user();
  
// Redirect user to desired location
    return redirect('/dashboard');
})->name('login.callback');

//Route to dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
