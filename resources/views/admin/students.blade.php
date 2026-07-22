@extends('layouts.admin')

@section('content')

<div class="student-table">

    <table class="table table-hover align-middle">

        <thead>

        <tr>

            <th>Student Name</th>
       

            <th>Student ID</th>

            <th>Email</th>

            <th>Enrolled Courses</th>

            <th>Avg. Score</th>

            <th>Status</th>

            <th>Action</th>

        </tr>

        </thead>

        <tbody>

        @foreach($students as $student)

        <tr>

            <td>

                <div class="d-flex align-items-center">

                    @if($student->profile_image)

                        <img src="{{ asset('storage/'.$student->profile_image) }}"
                             class="rounded-circle me-2"
                             width="45"
                             height="45">

                    @else

                        <img src="{{ asset('images/avatar.png') }}"
                             class="rounded-circle me-2"
                             width="45"
                             height="45">

                    @endif

                    <div>

                        <strong>{{ $student->full_name }}</strong>

                    </div>

                </div>

            </td>

            <td>

                ENG{{ str_pad($student->user_id,6,'0',STR_PAD_LEFT) }}

            </td>

            <td>

                {{ $student->email }}

            </td>

            <td>

                0 Courses

            </td>

            <td>

                0%

            </td>
            <td>
                <form action="{{ route('students.status', $student->user_id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button class="{{ $student->status == 'Active' ? 'status-active' : 'status-inactive' }}">
                        {{ $student->status }}
                    </button>
                </form>
            </td>

            <td>

                <a href="#">
                    View Profile
                </a>

            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

    <div class="d-flex justify-content-between">

        <span>

            Showing {{ $students->firstItem() }}

            to

            {{ $students->lastItem() }}

            of

            {{ $students->total() }}

            students

        </span>

        {{ $students->links() }}

    </div>

</div>

@endsection