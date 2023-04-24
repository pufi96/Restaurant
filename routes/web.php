<?php

use Illuminate\Support\Facades\Route;
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
Route::get("/", [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/reservation', [\App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', [\App\Http\Controllers\ReservationController::class, 'store'])->name('doReservation');
Route::get('/registration',[\App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::post('/registration',[\App\Http\Controllers\RegistrationController::class, 'doRegistration'])->name('doRegistration');
Route::post('/contact',[\App\Http\Controllers\ContactController::class, 'store'])->name('contacting');

Route::middleware(\App\Http\Middleware\Guest::class)->group(function(){
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('doLogin');
});

Route::middleware(\App\Http\Middleware\Logged::class)->group(function(){
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::middleware(\App\Http\Middleware\Admin::class)->group(function(){
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'create'])->name('users');
    Route::get('/menus', [\App\Http\Controllers\MenuController::class, 'create'])->name('menus');
    Route::post('/menus', [\App\Http\Controllers\MenuController::class, 'store'])->name('menusAdd');
    Route::get('/users.update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('userChange');
    Route::get('/menus.update/{id}', [\App\Http\Controllers\MenuController::class, 'update'])->name('menuChange');
    Route::get('/users.destroy/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('usersActive');
    Route::get('/menus.destroy/{id}', [\App\Http\Controllers\MenuController::class, 'destroy'])->name('menusVisible');
    Route::get('/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('usersChange');
    Route::get('/menus/{menu}',[\App\Http\Controllers\MenuController::class, 'show'])->name('menusChange');
});

Route::redirect("/", "/home");
