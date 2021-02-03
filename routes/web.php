<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//tao group route customers
Route::group(['prefix' => 'customers'], function () {
    Route::get('/',[CustomerController::class ,'index'])->name('customers.index');
    Route::get('/create',[CustomerController::class , 'create'])->name('customers.create');
    Route::post('/create',[CustomerController::class , 'store'])->name('customers.store');
    Route::get('/{id}/edit',[CustomerController::class , 'edit'])->name('customers.edit');
    Route::post('/{id}/edit',[CustomerController::class , 'update'])->name('customers.update');
    Route::get('/{id}/destroy',[CustomerController::class , 'destroy'])->name('customers.destroy');
});
