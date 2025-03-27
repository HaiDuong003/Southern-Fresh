<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\CMS\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public $employee;
    public function __construct(EmployeeService $employee)
    {
        $this->employee = $employee;
    }

    public function listEmployee(Request $request)
    {
        // $list = $this->employee->paginateAll(5);
        $conditions[] = ['is_active', '=', 1];
        $list = $this->employee->paginateFill($conditions, 5);
        return view('managements.employee.list', compact('list'));
    }

    // fillter Employee
    public function filterEmployee(Request $request)
    {
        try {
            //code...
            $list = [];
            // if ($request->has('name') && !empty($request->name) && $request->has('is_active') && !empty($request->is_active)) {
            //     if ($request->is_active == 'true') {
            //         $list = $employee->paginateFill([['is_active', '=', 1], ['name', 'LIKE', '%' . $request->name . '%']], 5);
            //     } elseif ($request->is_active == 'false') {
            //         $list = $employee->fillSum($request->name, 0);
            //     } elseif ($request->is_active == 'all') {
            //         $list = $employee->paginateFill([['name', 'LIKE', '%' .  $request->name . '%']], 5);
            //     }
            // } else {
            //     if ($request->is_active == 'all') {
            //         $list = $employee->paginateAll(5);
            //     } else if ($request->is_active == 'true') {
            //         $list = $employee->paginateFill([['is_active', '=', 1]], 5);
            //     } else if ($request->is_active == 'false') {
            //         $list = $employee->paginateFill([['is_active', '=', 0]], 5);
            //     }
            // }
            $conditions = [];

            if ($request->has('name') && !empty($request->name)) {
                $conditions[] = ['name', 'LIKE', '%' . $request->name . '%'];
            }

            if ($request->has('is_active') && !empty($request->is_active) && $request->is_active !== 'all') {
                $conditions[] = ['is_active', '=', $request->is_active === 'true' ? 1 : 0];
            }

            $list = empty($conditions)
                ? $this->employee->paginateAll(5)
                : $this->employee->paginateFill($conditions, 5);

            return view('components.list_employee', compact('list'))->render();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // detail employee
    public function detailEmployee(int $id)
    {
        //
        $employee = $this->employee->findById($id);
        // dd($employee);
        return view('managements.employee.detailEmployee', compact('employee'));
    }

    public function editEmployeeForm(int $id)
    {
        //
        $employee = $this->employee->findById($id);
        return view('managements.employee.edit_employee', compact('employee'));
    }

    public function editEmployee()
    {
        //
    }

    public function addEmployeeForm()
    {
        //
        return view('managements.employee.add');
    }

    public function addEmployee(RegisterRequest $request)
    {
        $validated = $request->validated();
        // $allInfor = $request->all();
        try {
            if (!empty($validated)) {
                $validated['role'] = $request->role;
                $validated['is_active'] = true;
                // dd($validated);
                $add = $this->employee->create($validated);
                if ($add) {
                    if ($validated['role'] == 'employee') {
                        return redirect()->route('listEmployee');
                    } else {
                        return redirect()->route('listManager');
                    }
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function deleteEmployee(int $id)
    {
        //
        // $employeeDelete = $this->employee->
        $deleted = $this->employee->delete($id);
        if ($deleted['1'] == 'employee') {
            return redirect()->route('listEmployee');
        } else {
            return redirect()->route('listManager');
        }
    }
}
