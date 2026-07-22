@extends('layouts.admin')

@section('content')

<a href="{{ route('create-course.create') }}">
    <button>Add Course</button>
</a>

<br><br>

@foreach($courses as $course)

<div class="course-card">

    <h3>{{ $course->title }}</h3>

    <p>{{ $course->description }}</p>

    <p>Level: {{ $course->level }}</p>

    <p>Total Lessons: {{ $course->total_lessons }}</p>

    <p>Duration: {{ $course->duration }}</p>

    @if($course->cover_image)
        <img src="{{ asset('storage/' . $course->cover_image) }}"
             width="200">
    @endif

    <hr>

</div>

@endforeach

@endsection