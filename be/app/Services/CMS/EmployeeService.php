<?php

namespace App\Services\CMS;

use App\Repositories\Interfaces\EmployeeInterface;

class EmployeeService
{
    public $employeeRepository;

    public function __construct(EmployeeInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    //

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }

    public function find($row, $value)
    {
        return $this->employeeRepository->find($row, $value)->get();
    }

    public function findById(int $id)
    {
        //
        return $this->employeeRepository->findById($id);
    }

    public function paginate($count)
    {
        return $this->employeeRepository->paginate($count);
    }

    public function paginateAll($count)
    {
        return $this->employeeRepository->find('role', 'employee')->paginate($count);
    }

    public function paginateFill(array $array, int $count)
    {
        return $this->employeeRepository->find('role', 'employee')->where($array)->paginate($count);
    }
}
