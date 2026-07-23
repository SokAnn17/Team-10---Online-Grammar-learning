<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{

public function show($course_id)
{
    $course = Course::findOrFail($course_id);

    $quiz = Quiz::where('course_id', $course_id)
                ->with('questions')
                ->first();

    return view('admin.create-quiz', compact(
        'course',
        'quiz'
    ));
}

public function index()
{
    $courses = Course::all();

    return view('admin.ad-quizzes', compact('courses'));
}

public function create(Course $course)
{
    return view('admin.quiz.create', compact('course'));
}


public function store(Request $request, Course $course)
{
    $request->validate([
        'quiz_title' => 'required',
        'description' => 'required',
        'passing_score' => 'required|numeric|min:0|max:100',
        'quiz_duration' => 'required|numeric|min:1',
    ]);

    Quiz::create([
        'course_id'      => $course->course_id,
        'quiz_title'     => $request->quiz_title,
        'description'    => $request->description,
        'passing_score'  => $request->passing_score,
        'quiz_duration'  => $request->quiz_duration,
    ]);

    return redirect()
        ->route('admin.quiz.show', $course->course_id)
        ->with('success', 'Quiz created successfully!');
}
public function update(Request $request, Quiz $quiz)
{
    $request->validate([
        'quiz_title'     => 'required',
        'description'    => 'required',
        'passing_score'  => 'required|numeric|min:0|max:100',
        'quiz_duration'  => 'required|numeric|min:1',
    ]);

    $quiz->update([
        'quiz_title'     => $request->quiz_title,
        'description'    => $request->description,
        'passing_score'  => $request->passing_score,
        'quiz_duration'  => $request->quiz_duration,
    ]);

    return redirect()
        ->route('admin.quiz.show', $quiz->course_id)
        ->with('success', 'Quiz updated successfully.');
}

}
