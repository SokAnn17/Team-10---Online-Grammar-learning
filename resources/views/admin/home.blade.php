@extends('layouts.admin')



@section('content')

<div class="cards">

    <div class="card">
        <h4>Total Courses</h4>
        <h1>{{ $totalCourses }}</h1>
    </div>

    <div class="card">
        <h4>Total Students</h4>
        <h1>{{ $totalStudents }}</h1>
    </div>

    {{-- <div class="card">
        <h4>Total Quiz</h4>
        <h1>{{ $totalQuiz }}</h1>
    </div>

</div> --}}


@endsection