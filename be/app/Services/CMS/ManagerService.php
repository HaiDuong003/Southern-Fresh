<?php

namespace App\Services\CMS;

use App\Repositories\Interfaces\ManagerInterface;

class ManagerService
{
    //
    public $manager;
    public function __construct(ManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function find($row, $value)
    {
        return $this->manager->find($row, $value);
    }

    public function paginateAll($count)
    {
        return $this->manager->find('role', 'manager')->paginate($count);
    }

    public function paginateFill(array $array, int $count)
    {
        return $this->manager->find('role', 'manager')->where($array)->paginate($count);
    }

    public function delete(int  $id)
    {
        $data = $this->manager->findById($id);
        if ($data) {
            $data->delete();
        } else {
            //
        }
    }
}
