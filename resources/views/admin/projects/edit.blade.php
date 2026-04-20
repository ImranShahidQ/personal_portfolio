@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Project</h2>
    <form action="{{ route('admin.projects.update', $project->id) }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $project->title) }}" required>
        </div>
        <div>
            <label>Category</label>
            <input type="text" name="category" value="{{ old('category', $project->category) }}" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" rows="4">{{ old('description', $project->description) }}</textarea>
        </div>
        <div class="form-group">
            <label>Project Media (Image / Video)</label>
            <input type="file" name="media[]" accept="image/*,video/*" multiple>
            @if($project->media)
                <div style="margin-top:10px;">
                    <p>Existing Media:</p>
                    @foreach($project->media as $media)
                        @if(str_contains($media, '.mp4') || str_contains($media, '.mov'))
                            <video width="150" controls>
                                <source src="{{ asset('storage/' . $media) }}" type="video/mp4">
                            </video>
                        @else
                            <img src="{{ asset('storage/' . $media) }}" width="150" style="margin-right:5px;">
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div>
            <label>Upload New Media (optional)</label>
            <input type="file" name="media[]" multiple>
        </div>
        <button type="submit" style="margin-top:10px;background: green;padding: 10px;border-radius: 10px;color: white;">
            Update Project
        </button>
        <a href="{{ route('admin.projects.index') }}" style="margin-left:10px;background: #007cffb8;padding: 10px;border-radius: 10px;color: white;text-decoration: none;">
            ← Back
        </a>
    </form>
</div>
@endsection
