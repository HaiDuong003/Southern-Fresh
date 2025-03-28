<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Services\CMS\EmployeeService;
use App\Services\CMS\ManagerService;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public $manager;
    public function __construct(ManagerService $manager)
    {
        $this->manager = $manager;
    }

    public function listManager(Request $request)
    {
        // $list = $this->manager->paginateAll(5);
        $conditions[] = ['is_active', '=', 1];
        $list = $this->manager->paginateFill($conditions, 5);
        return view('managements.managers.list', compact('list'));
    }

    public function filterManager(Request $request)
    {
        $list = [];
        $conditions = [];

        if ($request->has('name') && !empty($request->name)) {
            $conditions[] = ['name', 'LIKE', '%' . $request->name . '%'];
        }

        if ($request->has('is_active') && !empty($request->is_active) && $request->is_active !== 'all') {
            $conditions[] = ['is_active', '=', $request->is_active === 'true' ? 1 : 0];
        }

        $list = empty($conditions)
            ? $this->manager->paginateAll(5)
            : $this->manager->paginateFill($conditions, 5);

        return view('components.list_manager', compact('list'))->render();
    }
}
