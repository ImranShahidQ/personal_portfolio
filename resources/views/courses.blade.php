@extends('layouts.app')

@section('title', 'Courses | Next Logic Hub')

@section('content')
<section id="courses">
    <h2><i class="fas fa-book"></i> Our Courses</h2>

    <div class="grid">
        @foreach($courses as $course)
            <a href="{{ route('courses.show', $course['slug']) }}" class="card">
                <i class="{{ $course['icon'] }}"></i>
                <h3>{{ $course['title'] }}</h3>
            </a>
        @endforeach
    </div>
</section>
@endsection
