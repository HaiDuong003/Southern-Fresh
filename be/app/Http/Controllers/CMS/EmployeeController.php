<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\CMS\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function listEmployee(EmployeeService $employee, Request $request)
    {
        $list = $employee->paginateAll(5);
        return view('managements.Employee.list', compact('list'));
    }

    // fillter Employee
    public function filterEmployee(Request $request, EmployeeService $employee)
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
                ? $employee->paginateAll(5)
                : $employee->paginateFill($conditions, 5);

            return view('components.list_employee', compact('list'))->render();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // detail employee
    public function detailEmployee(EmployeeService $employee, int $id)
    {
        //
        $employee = $employee->findById($id);
        // dd($employee);
        return view('managements.Employee.detailEmployee', compact('employee'));
    }

    public function editEmployeeForm(EmployeeService $employee, int $id)
    {
        //
        $employee = $employee->findById($id);
        return view('managements.Employee.edit_employee', compact('employee'));
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
        //
        $validated = $request->validated();
        dd($validated);
    }
}
