<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::post('admin/plans',[Admin\PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans', [Admin\PlanController::class, 'index'])->name('plans.index');
Route::get('admin/plans/create', [Admin\PlanController::class, 'create'])->name('plans.create');
Route::get('admin/plans/{url}', [Admin\PlanController::class, 'show'])->name('plans.show');

Route::get('/', function () {
    return view('welcome');
});
