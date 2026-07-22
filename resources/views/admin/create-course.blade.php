@extends('layouts.admin')

@section('content')

<form action="{{ route('create-course.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <label>Category</label>

    <select name="category_id" required>
        <option value="">Select Category</option>
        <option value="1">Beginner</option>
        <option value="2">Intermediate</option>
        <option value="3">Advanced</option>
    </select>

    <br><br>

    <label>Course Title</label>

    <input type="text" name="title" required>

    <br><br>

    <label>Description</label>

    <textarea name="description" required></textarea>

    <br><br>

    <label>Level</label>

    <select name="level" required>
        <option value="">Select Level</option>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
    </select>

    <br><br>

    <label>Total Lessons</label>

    <input type="number" name="total_lessons" required>

    <br><br>

    <label>Duration</label>

    <input type="text" name="duration" required>

    <br><br>

    <label>Cover Image</label>

    <input type="file" name="cover_image">

    <br><br>

    <button type="submit">
        Create Course
    </button>

</form>

@endsection