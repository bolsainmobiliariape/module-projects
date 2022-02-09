<?php

use Bolsainmobiliariape\ModuleProjects\Http\Controllers\Dashboard\Projects\IndexController;
use Bolsainmobiliariape\ModuleProjects\Http\Livewire\Dashboard\Projects\Show;
use Illuminate\Support\Facades\Route;

Route::as('dashboard.projects.')->middleware(['web'])->prefix('/dashboard/projects')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('{project}', Show::class)->name('show');
});