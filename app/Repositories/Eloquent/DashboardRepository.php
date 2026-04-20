<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\DashboardRepositoryInterface;

class DashboardRepository implements DashboardRepositoryInterface
{
    public function getStats(): array
    {
        $students = DB::table('contacts')
            ->select(DB::raw('COUNT(DISTINCT CONCAT(name, "|", email)) as total'))
            ->value('total');

        return [
            'projects' => Project::count(),
            'contacts' => Contact::count(),
            'students' => $students,
        ];
    }
}
