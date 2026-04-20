<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $groupedProjects = $this->projectService->getProjectsGroupedByCategory();

        return view('projects', compact('groupedProjects'));
    }

    public function show(int $id)
    {
        $project = $this->projectService->getProjectById($id);
        return view('project-detail', compact('project'));
    }
}
