<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = config('courses');
        return view('courses', compact('courses'));
    }

    public function show(string $slug)
    {
        $course = collect(config('courses'))->firstWhere('slug', $slug);

        abort_if(!$course, 404);

        return view('course-detail', compact('course'));
    }
}
