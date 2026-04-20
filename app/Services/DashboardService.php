<?php

namespace App\Services;

use App\Repositories\Interfaces\DashboardRepositoryInterface;

class DashboardService
{
    protected DashboardRepositoryInterface $dashboardRepository;

    public function __construct(DashboardRepositoryInterface $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    public function getStats(): array
    {
        $stats = $this->dashboardRepository->getStats();
        $courses = config('courses');
        $stats['courses'] = is_array($courses) ? count($courses) : 0;
        return $stats;
    }
}
