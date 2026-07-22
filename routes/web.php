<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// --- Guest-only routes (only reachable when NOT logged in) ---
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// --- Logout (requires being logged in) ---
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Student routes
Route::middleware('auth')->group(function () {
    Route::get('/courses', function () {
        return view('student.courses');
    });
    Route::get('/mylearning', function () {
        return view('student.mylearning');
    })->name('student.mylearning');
    Route::get('/learninghistory', function () {
        return view('student.learninghistory');
    });
    Route::get('/myprofile', function () {
        return view('student.myprofile');
    });
    Route::get('/quizzes', function () {
        return view('student.quizzes');
    });
});

//Admin routes
Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin/create-course', [CourseController::class, 'create'])
        ->name('create-course.create');

    Route::post('/admin/ad-courses/store', [CourseController::class, 'store'])
        ->name('create-course.store');

    Route::get('/ad-courses', [CourseController::class, 'index'])
        ->name('ad-courses');

    Route::get('/students', function () {
        return view('admin.students');
    });

    Route::get('/home', function () {
        return view('admin.home');
    });

    Route::get('/ad-myprofile', function () {
        return view('admin.ad-myprofile');
    });

    Route::get('/ad-quizzes', function () {
        return view('admin.ad-quizzes');
    });

});   // ← ONLY ONE closing bracket


//add Lessons
Route::get('/admin/course/{course_id}/create-lessons',
    [LessonController::class, 'create'])
    ->name('create-lessons.create');

Route::post('/admin/course/{course_id}/create-lessons',
    [LessonController::class, 'store'])
    ->name('create-lessons.store');