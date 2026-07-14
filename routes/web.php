<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');
});
Route::get('/courses', function () {
    return view('student.courses');
});
Route::get('/mylearning', function () {
    return view('student.mylearning');
});
Route::get('/learninghistory', function () {
    return view('student.learninghistory');
});
Route::get('/myprofile', function () {
    return view('student.myprofile');
});
Route::get('/quizzes', function () {
    return view('student.quizzes');
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/admin/courses', function () {
    return view('admin.courses.index');
});
Route::get('/admin/courses/create', function () {
    return view('admin.courses.create');
});
Route::get('/admin/courses/edit', function () {
    return view('admin.courses.edit');
});
Route::get('/admin/lessons/create', function () {
    return view('admin.lessons.create');
});
Route::get('/admin/lessons/edit', function () {
    return view('admin.lessons.edit');
});
Route::get('/admin/quiz', function () {
    return view('admin.quiz.index');
});
Route::get('/admin/quiz/create', function () {
    return view('admin.quiz.create');
});
Route::get('/admin/quiz/edit', function () {
    return view('admin.quiz.edit');
});
Route::get('/admin/students', function () {
    return view('admin.students.index');
});


