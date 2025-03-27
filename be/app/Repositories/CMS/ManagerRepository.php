<?php

namespace App\Repositories\CMS;

use App\Repositories\Interfaces\ManagerInterface;
use App\Models\User;

class ManagerRepository implements ManagerInterface
{
    public $manager;
    public function __construct(User $manager)
    {
        $this->manager = $manager;
    }

    public function getAll()
    {
        //
    }
    public function findByEmail(string $email)
    {
        //
    }
    public function findById(int $id)
    {
        //
    }
    public function create(array $data)
    {
        //
    }
    public function update(int $id, array $data)
    {
        //
    }
    public function delete(int $id)
    {
        //
        return $this->manager->delete();
    }
    public function find($row, $value)
    {
        //
        return $this->manager->where($row, $value);
    }

    public function paginateAll($count)
    {
        //
        return $this->manager->find('role', 'manager')->paginate($count);
    }

    public function paginateFill(array $array, int $count)
    {
        return $this->manager->find('role', 'manager')->where($array)->paginate($count);
    }
}
