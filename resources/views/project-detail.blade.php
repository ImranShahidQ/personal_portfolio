@extends('layouts.app')
@section('title', $project->title)
@section('content')
@php
    use Illuminate\Support\Str;
@endphp
<section id="project-detail">
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>

    <div class="grid">
        @foreach($project->media as $item)
            @if(Str::endsWith($item, ['.mp4', '.mov']))
                <video src="{{ asset('storage/'.$item) }}" controls height="100%" width="100%"></video>
            @else
                <img src="{{ asset('storage/'.$item) }}" alt="Project Media" height="100%" width="100%">
            @endif
        @endforeach
    </div>
</section>
@endsection
