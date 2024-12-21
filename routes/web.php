<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('applicant');
})->name('applicant');

Route::get('/home', function () {
    return view('auth.homeauth');
})->name('homeauth');


Route::get('/tim-viec-lam', function () {
    return view('auth.layouts.job');
})->name('tim-viec-lam');


Route::get('/chi-tiet', function () {
    return view('auth.layouts.jobdetail');
})->name('chi-tiet');



Route::get('/employer', function () {
    return view('employer.employer');
})->name('employer');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/employer-auth.php';



//user route
Route::middleware(['auth', 'userMiddleware'])->group(function(){

    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});


//admin route
Route::middleware(['auth', 'adminMiddleware'])->group(function(){

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
