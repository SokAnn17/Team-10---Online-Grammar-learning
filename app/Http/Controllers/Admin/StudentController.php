<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
// use App\Models\Quiz;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')
                        ->paginate(10);

        $totalStudents = User::where('role','student')->count();

        return view('admin.students', compact(
            'students',
            'totalStudents'
        ));
    }
        public function changeStatus($id)
        {
            $student = User::findOrFail($id);

            $student->status =
                $student->status == 'Active'
                ? 'Inactive'
                : 'Active';

            $student->save();

            return back();
        }

}