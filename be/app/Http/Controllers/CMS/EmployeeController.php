<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Services\CMS\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function listEmployee(EmployeeService $employee, Request $request)
    {
        $list = $employee->paginateAll(5);
        // $listByName = $employee->paginateWhere();
        return view('managements.Employee.list', compact('list'));
    }

    // fillter Employee
    public function filterEmployee(Request $request, EmployeeService $employee)
    {
        //
        $list = $employee->paginateAll(5);
        if ($request->has('name') && !empty($request->name)) {
            $list = $employee->paginateFill(['name', '=', '%' . $request->name . '%'], 5);
        }

        if ($request->has('is_active') && !empty($request->is_active)) {
            if ($request->is_active == 'all') {
                $list = $employee->paginateAll(5);
            } else if ($request->is_active == 'true') {
                $list = $employee->paginateFill([['is_active', '=', 1]], 5);
            } else if ($request->is_active == 'false') {
                $list = $employee->paginateFill([['is_active', '=', 0]], 5);
            }
        }

        // if ($request->has('is_active') && !empty($request->is_active) && $request->is_active == 'all') {
        //     //
        //     $list = $employee->paginateAll(5);
        // }

        return view('components.list_employee', compact('list'))->render();
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
}
