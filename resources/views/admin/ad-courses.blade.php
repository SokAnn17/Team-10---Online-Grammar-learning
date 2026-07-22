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

    <p><strong>Level:</strong> {{ $course->level }}</p>

    <p><strong>Total Lessons:</strong> {{ $course->total_lessons }}</p>

    <p><strong>Duration:</strong> {{ $course->duration }}</p>

    @if($course->cover_image)
        <img src="{{ asset('storage/' . $course->cover_image) }}" width="200">
    @endif

    <br><br>


    <hr>

   <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px;">

   </div>
   
    <h4>Lessons Management</h4>

    <a href="{{ route('create-lessons.create', $course->course_id) }}">
        <button>+ Add Lesson</button>
    </a>

</div>

<table border="1" width="100%" cellpadding="10" cellspacing="0">

    <thead>

        <tr>

            <th>Lesson Title</th>

            <th>Type</th>

            <th>Duration</th>

            <th>Status</th>

            <th>Action</th>

        </tr>

    </thead>

    <tbody>

    @forelse($course->lessons as $lesson)

        <tr>

            <td>{{ $lesson->lesson_title }}</td>

            <td>{{ $lesson->lesson_type }}</td>

            <td>{{ $lesson->duration }} mins</td>

            <td>{{ $lesson->status }}</td>

            <td>

                <a href="">Edit</a> |

                <a href="">Delete</a>

            </td>

        </tr>

    @empty

        <tr>

            <td colspan="5" style="text-align:center;">
                No lessons found.
            </td>

        </tr>

    @endforelse

    </tbody>

</table>
@endforeach

@endsection