<?php

namespace App\Repositories\CMS;

use App\Repositories\Interfaces\EmployeeInterface;
use App\Models\User;

class EmployeeRepository implements EmployeeInterface
{
    //
    public $employee;

    public function __construct(User $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        //
        return $this->employee->all();
    }
    public function findByEmail(string $email)
    {
        //
    }
    public function findById(int $id)
    {
        //
        return $this->employee->find($id);
    }
    public function create(array $data)
    {
        // 
        return $this->employee->create($data);
    }
    public function update(array $data, $id)
    {
        //
        return $this->employee->update($data, ['id' => $id]);
    }
    public function delete(int $id)
    {
        //
        return $this->employee->delete();
    }
    public function find($row, $value)
    {
        //
        return $this->employee->where($row, $value);
    }

    public function paginate($count)
    {
        return $this->employee->paginate($count);
    }

    public function paginateAll($count)
    {
        //
        return $this->employee->find('role', 'employee')->paginate($count);
    }

    public function paginateFill(array $array, int $count)
    {
        return $this->employee->find('role', 'employee')->where([$array])->paginate($count);
    }
}
