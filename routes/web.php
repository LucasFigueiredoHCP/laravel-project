<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', [App\Http\Controllers\homeController::class, 'form'])->name('form');
Route::post('form', [App\Http\Controllers\homeController::class, 'storeForm'])->name('storeForm');

Route::get('list', [App\Http\Controllers\homeController::class, 'dataList'])->name('dataList');

Route::get('alterar/{id}', [App\Http\Controllers\homeController::class, 'alterar'])->name('alterar');
Route::post('alterar/{id}', [App\Http\Controllers\homeController::class, 'alterarForm'])->name('alterarForm');

Route::get('delete/{id}', [App\Http\Controllers\homeController::class, 'delete'])->name('delete');
Route::post('delete/{id}', [App\Http\Controllers\homeController::class, 'deleteForm'])->name('deleteForm');
//In first parameter we need pass the route, and inform that we send any data by url with an id after the '/' and above '{}'
//The controller will know what do with the data, but we need specify this in created function

