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

Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/backend', function () {
//     return view('backend');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');
    //เส้นทางไปหน้า profile
    Route::get('/profile', function () {
        return view('profile');
    })->name(name: 'profile');
    //เส้นทางไปหน้า Userdata
    Route::get('/userdata', function () {
        return view('userdata');
    })->name(name: 'userdata');
});