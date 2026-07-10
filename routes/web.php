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
