<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::prefix('admin')->group(function(){
    Route::put('plans/{url}', [Admin\PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [Admin\PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [Admin\PlanController::class, 'search'])->name('plans.search');
    Route::post('plans',[Admin\PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [Admin\PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/create', [Admin\PlanController::class, 'create'])->name('plans.create');
    Route::get('plans/{url}', [Admin\PlanController::class, 'show'])->name('plans.show');
    Route::delete('plans/{url}', [Admin\PlanController::class, 'destroy'])->name('plans.destroy');
});



Route::get('/', function () {
    return view('welcome');
});
