<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function all()
    {
        return Project::latest()->get();
    }

    public function getByCategory(string $category)
    {
        return Project::where('category', $category)
            ->latest()
            ->get();
    }

    public function findById(int $id): Project
    {
        return Project::findOrFail($id);
    }

    public function create(array $data): Project
    {
        return Project::create($data);
    }

    public function update(Project $project, array $data): Project
    {
        $project->update($data);
        return $project;
    }

    public function delete(Project $project): bool
    {
        return $project->delete();
    }
}
