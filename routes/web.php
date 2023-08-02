<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NatigaConroller;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/natiga-thanway', [NatigaConroller::class, 'natigaThanway'])->name('natiga.thanway');
Route::get('/natiga-thanway-test', [NatigaConroller::class, 'test'])->name('natiga.test');

Route::get('/testing', function () {
    return "test";
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/test', function () {
    return view('dashboard.test');
});
Route::post('/import', [HomeController::class, 'import']);