<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::prefix('admin')->group(function(){
    /*
    * Routes Profile 
    */
    Route::resource('profiles', Admin\ACL\ProfileController::class);
    /*
    * Routes Details Plans
    */
    Route::get('plans/{url}/details/create',[Admin\DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::get('plans/{url}/details/{idDetail}',[Admin\DetailPlanController::class, 'show'])->name('details.plan.show');
    Route::put('plans/{url}/details/{idDetail}',[Admin\DetailPlanController::class, 'update'])->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit',[Admin\DetailPlanController::class, 'edit'])->name('details.plan.edit');
    Route::post('plans/{url}/details',[Admin\DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('plans/{url}/details',[Admin\DetailPlanController::class, 'index'])->name('details.plan.index');
    Route::delete('plans/{url}/details/{idDetail}',[Admin\DetailPlanController::class, 'destroy'])->name('details.plan.destroy');

    /*
    * Routes Plans
    */
    Route::get('plans/create', [Admin\PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}', [Admin\PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [Admin\PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [Admin\PlanController::class, 'search'])->name('plans.search');
    Route::post('plans',[Admin\PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [Admin\PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/{url}', [Admin\PlanController::class, 'show'])->name('plans.show');
    Route::delete('plans/{url}', [Admin\PlanController::class, 'destroy'])->name('plans.destroy');
});


Route::get('/', function () {
    return view('welcome');
});
