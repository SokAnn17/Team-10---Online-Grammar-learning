<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::with('category')->get();
    $courses = Course::with('lessons')->get();

    return view('admin.ad-courses', compact('courses'));
}

   public function create()
{
    $categories = CourseCategory::all();

    return view('admin.create-course', compact('categories'));
}


   public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'level' => 'required',
        'total_lessons' => 'required|integer',
        'duration' => 'required',
        'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $image = null;

    if ($request->hasFile('cover_image')) {

        $image = $request->file('cover_image')
                         ->store('courses', 'public');
    }

    Course::create([
        'category_id' => 1,
        'title' => $request->title,
        'description' => $request->description,
        'level' => $request->level,
        'total_lessons' => $request->total_lessons,
        'duration' => $request->duration,
        'cover_image' => $image
    ]);

    return redirect()->back()->with('success', 'Course created successfully!');
}

}
