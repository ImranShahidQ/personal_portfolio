<?php

namespace App\Repositories\Interfaces;

use App\Models\Project;

interface ProjectRepositoryInterface
{
    public function all();
    public function getByCategory(string $category);
    public function findById(int $id): Project;
    public function create(array $data): Project;
    public function update(Project $project, array $data): Project;
    public function delete(Project $project): bool;
}
