<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
// use App\Models\Quiz;

class HomeController extends Controller
{
    public function index()
    {
        $totalCourses = Course::count();

        $totalStudents = User::where('role','student')->count();

        // $totalQuiz = Quiz::count();

        return view('admin.home', compact(
            'totalCourses',
            'totalStudents',
            // 'totalQuiz'
        ));
    }
}