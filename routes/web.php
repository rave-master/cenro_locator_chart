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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/personnellocator', [App\Http\Controllers\PesonnelLocatorController::class, 'index'])->name('personel_locator.index');
route::get('/personnellocator/create', [App\Http\Controllers\PesonnelLocatorController::class, 'create'])->name('personel_locator.create');
route::post('/personnellocator/store', [App\Http\Controllers\PesonnelLocatorController::class, 'store'])->name('personel_locator.store');
route::get('/personnellocator/edit/{id}', [App\Http\Controllers\PesonnelLocatorController::class, 'edit'])->name('personel_locator.edit');
route::put('/personnellocator/update/{id}', [App\Http\Controllers\PesonnelLocatorController::class, 'update'])->name('personel_locator.update');
route::delete('/personnellocator/delete/{id}', [App\Http\Controllers\PesonnelLocatorController::class, 'destroy'])->name('personel_locator.destroy');
