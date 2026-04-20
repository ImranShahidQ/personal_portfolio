@extends('layouts.admin')

@section('content')
<div class="container">

    <h2>Add New Project</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Project Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" required>
                <option value="">Select Category</option>
                <option value="editing">Editing Showcase</option>
                <option value="portfolio">Portfolio Websites</option>
                <option value="business">Business Websites</option>
                <option value="web-apps">Web Applications</option>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label>Project Media (Image / Video)</label>
            <input type="file" name="media[]" accept="image/*,video/*" multiple>
        </div>
        <button type="submit" style="margin-top:10px;background: green;padding: 10px;border-radius: 10px;color: white;">
            Save Project
        </button>
        <a href="{{ route('admin.projects.index') }}" style="margin-left:10px;background: #007cffb8;padding: 10px;border-radius: 10px;color: white;text-decoration: none;">
            ← Back
        </a>
    </form>
</div>
@endsection
