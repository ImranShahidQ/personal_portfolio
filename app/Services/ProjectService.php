<?php

namespace App\Services;

use App\Models\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    protected ProjectRepositoryInterface $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function getProjects(?string $category = null)
    {
        if ($category) {
            return $this->projectRepository->getByCategory($category);
        }

        return $this->projectRepository->all();
    }

    public function getAllProjects()
    {
        return $this->projectRepository->all();
    }

    public function getProjectsGroupedByCategory(): array
    {
        $projects = $this->projectRepository->all();
        $grouped = [];
        foreach ($projects as $project) {
            $grouped[$project->category][] = $project;
        }

        return $grouped;
    }

    public function createProject(array $data): Project
    {
        if (isset($data['media'])) {
            $data['media'] = $this->uploadMedia($data['media']);
        }

        return $this->projectRepository->create($data);
    }

    public function updateProject(Project $project, array $data): Project
    {
        if (isset($data['media'])) {
            $this->deleteOldMedia($project);
            $data['media'] = $this->uploadMedia($data['media']);
        }

        return $this->projectRepository->update($project, $data);
    }

    public function deleteProject(Project $project): bool
    {
        $this->deleteOldMedia($project);
        return $this->projectRepository->delete($project);
    }

    public function getProjectById(int $id)
    {
        return $this->projectRepository->findById($id);
    }

    private function uploadMedia(array $files): array
    {
        $paths = [];

        foreach ($files as $file) {
            $paths[] = $file->store('projects', 'public');
        }

        return $paths;
    }

    private function deleteOldMedia(Project $project): void
    {
        if (!$project->media) {
            return;
        }

        foreach ($project->media as $file) {
            Storage::disk('public')->delete($file);
        }
    }
}
