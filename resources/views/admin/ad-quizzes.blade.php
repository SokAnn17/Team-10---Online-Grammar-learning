@extends('layouts.admin')

@section('content')

<h2>Course Quiz Management</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>Course ID</th>
        <th>Course Title</th>
        <th>Total Lessons</th>
        <th>Action</th>
    </tr>

    @foreach($courses as $course)

    <tr>

        <td>{{ $course->course_id }}</td>

        <td>{{ $course->title }}</td>

        <td>{{ $course->total_lessons }}</td>

        <td>

            <a href="{{ route('admin.quiz.show', $course->course_id) }}">
                Manage Quiz
            </a>

        </td>

    </tr>

    @endforeach

</table>

@endsection