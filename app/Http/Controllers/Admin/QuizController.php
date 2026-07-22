<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
public function show($lesson_id)
{
    // Get the lesson
    $lesson = Lesson::findOrFail($lesson_id);

    // Get the quiz for this lesson
    $quiz = Quiz::where('lesson_id', $lesson_id)
                ->with('questions')
                ->first();

    return view('admin.ad-quizzes', compact(
    'lesson',
    'quiz'
));
}

public function index()
{
    $lessons = Lesson::all();

    return view('admin.ad-quizzes', compact('lessons'));
}
public function create(Lesson $lesson)
{
    return view('admin.quiz.create',compact('lesson'));
}


public function store(Request $request, Lesson $lesson)
{
    $request->validate([
        'quiz_title'=>'required',
        'description'=>'required',
        'passing_score'=>'required',
        'quiz_duration'=>'required',
    ]);

    Quiz::create([
        'lesson_id'=>$lesson->lesson_id,
        'quiz_title'=>$request->quiz_title,
        'description'=>$request->description,
        'passing_score'=>$request->passing_score,
        'quiz_duration'=>$request->quiz_duration,
        'status'=>'Draft',
    ]);

    return redirect()->route('admin.quiz');
}

}
