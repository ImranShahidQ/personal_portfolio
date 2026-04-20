<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Models\Project;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected ProjectService $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getAllProjects();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store project
     */
    public function store(StoreProjectRequest $request)
    {
        $this->projectService->createProject($request->validated());
        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update project
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $this->projectService->updateProject($project, $request->validated());
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        $this->projectService->deleteProject($project);
        return back()->with('success', 'Project deleted successfully');
    }
}
