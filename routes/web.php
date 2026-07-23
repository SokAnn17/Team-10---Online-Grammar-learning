<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\StudentController;
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

    Route::get('/students', [StudentController::class, 'index'])
        ->name('students');
        Route::patch('/students/{id}/status', [StudentController::class, 'changeStatus'])
    ->name('students.status');

    Route::get('/home', [HomeController::class,'index'])
        ->name('admin.home');

    Route::get('/ad-myprofile', function () {
        return view('admin.ad-myprofile');
    });


    Route::get('/admin/view-student', function () {
        return view('admin.view-student');
    });


    //Quizz
  Route::get('/ad-quizzes', [QuizController::class,'index'])
    ->name('admin.quiz');

  Route::get('/ad-quizzes/{course}', [QuizController::class, 'show'])
        ->name('admin.quiz.show');
  Route::post('/ad-quizzes/{course}', [QuizController::class, 'store'])
    ->name('admin.quiz.store');
    Route::put('/ad-quizzes/{quiz}', [QuizController::class, 'update'])
    ->name('admin.quiz.update');
    Route::get('/questions/create/{quiz}', [QuestionController::class, 'create'])
    ->name('admin.question.create');

});   // ← ONLY ONE closing bracket


//add Lessons
Route::get('/admin/course/{course_id}/create-lessons',
    [LessonController::class, 'create'])
    ->name('create-lessons.create');

Route::post('/admin/course/{course_id}/create-lessons',
    [LessonController::class, 'store'])
    ->name('create-lessons.store');