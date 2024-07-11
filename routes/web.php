<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'register']);


// if (Auth::check()) {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('home');
// } else {

//     Route::get('/home', function () {
//         return "You are not logged in";
//     })->name('home');
// }


Route::get('/home', function () {
            return view('home');
        })->name('home')->middleware('checkage');



Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout'])->name('logout');
