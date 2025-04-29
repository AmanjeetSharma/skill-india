<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'featured' => 'nullable|boolean',
        ]);

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'featured' => $request->featured ?? false,
        ]);

        return redirect()->route('courses.index');
    }


    // Show enrolled courses on the user's dashboard
    public function showEnrolledCourses()
    {
        $user = Auth::user();
        $enrolledCourses = $user->courses;  // Get the courses the user is enrolled in

        return view('dashboard', compact('enrolledCourses'));
    }

    public function enroll($courseId)
    {
        $course = Course::findOrFail($courseId);
        $user = auth()->user();

        // Check if the user is already enrolled in the course
        if ($user->courses()->where('course_id', $courseId)->exists()) {
            return redirect()->back()->with('error', 'You are already enrolled in this course.');
        }

        // Enroll the user in the course (you need a pivot table `course_user` to store enrollments)
        $user->courses()->attach($courseId);

        return redirect()->route('dashboard')->with('success', 'You have successfully enrolled in the course!');
    }
    
}
