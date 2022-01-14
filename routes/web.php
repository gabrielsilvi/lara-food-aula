<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('admin/plans', [Admin\PlanController::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
