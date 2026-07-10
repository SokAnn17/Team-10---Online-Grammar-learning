<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');


// Student routes
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


//Admin routes
Route::get('/ad-courses', function () {
    return view('admin.ad-courses');
});
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
