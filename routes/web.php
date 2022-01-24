<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::put('admin/plans/{url}', [Admin\PlanController::class, 'update'])->name('plans.update');
Route::get('admin/plans/{url}/edit', [Admin\PlanController::class, 'edit'])->name('plans.edit');
Route::any('admin/plans/search', [Admin\PlanController::class, 'search'])->name('plans.search');
Route::post('admin/plans',[Admin\PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans', [Admin\PlanController::class, 'index'])->name('plans.index');
Route::get('admin/plans/create', [Admin\PlanController::class, 'create'])->name('plans.create');
Route::get('admin/plans/{url}', [Admin\PlanController::class, 'show'])->name('plans.show');
Route::delete('admin/plans/{url}', [Admin\PlanController::class, 'destroy'])->name('plans.destroy');

Route::get('/', function () {
    return view('welcome');
});
