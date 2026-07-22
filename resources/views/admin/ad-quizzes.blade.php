@extends('layouts.admin')

@section('content')

<h2>Lessons</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Lesson</th>
    <th>Action</th>
</tr>

@foreach($lessons as $lesson)

<tr>

    <td>{{ $lesson->lesson_id }}</td>

    <td>{{ $lesson->lesson_title }}</td>

    <td>

        <a href="{{ route('admin.quiz.show',$lesson->lesson_id) }}">
            Manage Quiz
        </a>

    </td>

</tr>

@endforeach

</table>

@endsection