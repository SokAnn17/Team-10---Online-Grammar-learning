<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;


class LessonController extends Controller
{
    public function create($course_id)
    {
        $course = Course::findOrFail($course_id);

        return view('admin.create-lessons', compact('course'));
    }

    public function store(Request $request, $course_id)
    {
        $request->validate([
            'lesson_title' => 'required',
            'lesson_type' => 'required',
            'duration' => 'required|integer',
            'content' => 'required',
            'lesson_order' => 'required|integer',
            'status' => 'required',
        ]);

        Lesson::create([
            'course_id' => $course_id,
            'lesson_title' => $request->lesson_title,
            'lesson_type' => $request->lesson_type,
            'duration' => $request->duration,
            'content' => $request->content,
            'lesson_order' => $request->lesson_order,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('create-lessons.create', $course_id)
            ->with('success', 'Lesson added successfully.');
    }
}
