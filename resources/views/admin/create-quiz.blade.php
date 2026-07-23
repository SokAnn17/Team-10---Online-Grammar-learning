@extends('layouts.admin')

@section('content')

<h2>Manage Quiz</h2>

<h3>Course: {{ $course->title }}</h3>

@if($quiz)

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h3>Quiz Information</h3>

<form action="{{ route('admin.quiz.update', $quiz->quiz_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Quiz Title</label><br>
        <input type="text"
               name="quiz_title"
               value="{{ $quiz->quiz_title }}"
               required>
    </div>

    <br>

    <div>
        <label>Description</label><br>
        <textarea
            name="description"
            rows="4"
            required>{{ $quiz->description }}</textarea>
    </div>

    <br>

    <div>
        <label>Passing Score (%)</label><br>
        <input type="number"
               name="passing_score"
               value="{{ $quiz->passing_score }}"
               min="0"
               max="100">
    </div>

    <br>

    <div>
        <label>Duration (minutes)</label><br>
        <input type="number"
               name="quiz_duration"
               value="{{ $quiz->quiz_duration }}">
    </div>

    <br>

    <button type="submit">
        Save Changes
    </button>

</form>

<hr>

<h3>Question Management</h3>

<a href="{{ route('admin.question.create', $quiz->quiz_id) }}">
    + Add New Question
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>#</th>
    <th>Question</th>
    <th>Type</th>
    <th>Score</th>
    <th>Action</th>
</tr>

@forelse($quiz->questions as $question)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $question->question_text }}</td>

<td>{{ ucfirst(str_replace('_',' ', $question->question_type)) }}</td>

<td>{{ $question->score }}</td>

<td>

    Edit |
    Delete

</td>

</tr>

@empty

<tr>

<td colspan="5">

No questions yet.

</td>

</tr>

@endforelse

</table>



@else

<h3>Create Quiz</h3>

<form action="{{ route('admin.quiz.store', $course->course_id) }}" method="POST">
    @csrf

    <div>
        <label>Quiz Title</label><br>
        <input type="text" name="quiz_title" required>
    </div>

    <br>

    <div>
        <label>Description</label><br>
        <textarea name="description" rows="4" required></textarea>
    </div>

    <br>

    <div>
        <label>Passing Score (%)</label><br>
        <input type="number" name="passing_score" min="0" max="100" required>
    </div>

    <br>

    <div>
        <label>Duration (minutes)</label><br>
        <input type="number" name="quiz_duration" required>
    </div>

    <br>

    <button type="submit">
        Create Quiz
    </button>

</form>

@endif

@endsection