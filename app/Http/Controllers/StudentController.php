<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Course;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('section', 'course')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $sections = Section::all();
        $courses = Course::all();
        return view('students.create', compact('sections', 'courses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'section_id' => 'required|exists:sections,id',
            'course_id' => 'nullable|exists:courses,id',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
}
