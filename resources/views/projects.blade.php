@extends('layouts.app')
@section('title', 'Projects')
@section('content')
<section id="projects">
    <h2><i class="fas fa-project-diagram"></i> Projects</h2>

    @foreach($groupedProjects as $category => $projects)
        <h3 style="margin: 2rem; color:#4dabff;">{{ ucfirst($category) }}</h3>
        <div class="grid">
            @foreach($projects as $project)
            <a href="{{ url('/projects/'.$project->id) }}" class="card project">
                {{ $project->title }}
            </a>
            @endforeach
        </div>
    @endforeach
</section>
@endsection
