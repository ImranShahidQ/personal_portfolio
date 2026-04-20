@extends('layouts.app')

@section('title', 'Courses | Next Logic Hub')

@section('content')
<div class="back-wrapper">
    <button onclick="history.back()" class="back-btn">
        <i class="fas fa-arrow-left"></i> Back
    </button>
</div>
<div class="course-detail-container">
    <div class="course-summary" onclick="toggleOutline()">
        <h2>{{ $course['title'] }}</h2>
        <div class="meta">
            <span><strong>Duration:</strong> {{ $course['duration'] }}</span>
            <span><strong>Fees:</strong> {{ $course['fees'] }}</span>
            <i class="fas fa-chevron-down" id="toggleIcon"></i>
        </div>
    </div>
    <div class="course-outline" id="courseOutline">
        <ul class="outline-list">
            <h2><i class="fas fa-book"></i>Course Outline</h2>
            @foreach($course['outline'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    <div class="enroll-wrapper">
        <a href="{{ route('contact') }}" class="enroll-btn">Enroll Now</a>
    </div>
</div>
@endsection
