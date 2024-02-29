<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(WebsiteController::class)->group(function() {
    Route::get('/', 'MainPage')->name('index');
    Route::get('/project', 'Project')->name('project');
    Route::get('/project/list', 'ProjectList')->name('project.list');
    Route::get('/brochure', 'Brochure')->name('brochure');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/logout', 'Logout')->name('logout');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
