<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController; 
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $courses = config('courses');
    return view('home', compact('courses'));
});
Route::view('/services', 'services');
Route::view('/about', 'about');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('courses', [AdminCourseController::class, 'index'])->name('courses');
        Route::get('projects', [AdminProjectController::class, 'index'])->name('projects.index');
        Route::get('projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('projects', [AdminProjectController::class, 'store'])->name('projects.store');
        Route::get('projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
        Route::put('projects/{project}', [AdminProjectController::class, 'update'])->name('projects.update');
        Route::delete('projects/{project}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});
