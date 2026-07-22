@extends('layouts.admin')

@section('content')

<h2>Create Lesson</h2>

<h4>Course: {{ $course->title }}</h4>

@if(session('success'))
    <div style="color:green">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('create-lessons.store', $course->course_id) }}"
      method="POST">

    @csrf

    <label>Lesson Title</label>
    <input type="text" name="lesson_title" required>

    <br><br>

    <label>Lesson Type</label>
    <select name="lesson_type">
        <option value="Video">Video</option>
        <option value="Reading">Reading</option>
        <option value="Quiz">Quiz</option>
    </select>

    <br><br>

    <label>Duration (minutes)</label>
    <input type="number" name="duration" required>

    <br><br>

    <label>Lesson Content</label>
    <textarea name="content" rows="6" required></textarea>

    <br><br>

    <label>Lesson Order</label>
    <input type="number" name="lesson_order" value="1">

    <br><br>

    <label>Status</label>
    <select name="status">
        <option value="published">Published</option>
        <option value="draft">Draft</option>
    </select>

    <br><br>

    <button type="submit">
        Save Lesson
    </button>

</form>

@endsection