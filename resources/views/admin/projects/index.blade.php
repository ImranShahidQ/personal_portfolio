@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Projects</h2>

    <a href="{{ route('admin.projects.create') }}"
       style="display:inline-block;margin-bottom:15px;padding:8px 15px;background:#007bff;color:#fff;border-radius:5px;text-decoration:none;">
        + Add New Project
    </a>

    <table width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Media</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td>
                        @if($project->media)
                            <a href="{{ asset('storage/'.$project->media[0]) }}" target="_blank">
                                <i class="fas fa-eye"></i>
                            </a>
                        @endif
                    </td>
                    <td class="action-buttons">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                    
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">No projects found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
