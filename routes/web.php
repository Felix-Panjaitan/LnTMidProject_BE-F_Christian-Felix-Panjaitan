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
    return view('welcome');
});

Route::get('/employes', [App\Http\Controllers\EmployeController::class, 'index'])->name('employes.index');
Route::get('/employes/create', [App\Http\Controllers\EmployeController::class, 'create'])->name('employes.create');
Route::post('/employes', [App\Http\Controllers\EmployeController::class, 'store'])->name( 'employes.store' );
Route::get('/employes/{id}/show', [App\Http\Controllers\EmployeController::class, 'show'])->name('employes.show');
Route::put('/employes/{id}/update', [App\Http\Controllers\EmployeController::class, 'update'])->name('employes.update');
Route::delete('/employes/{id}/delete', [App\Http\Controllers\EmployeController::class, 'delete'])->name('employes.delete');