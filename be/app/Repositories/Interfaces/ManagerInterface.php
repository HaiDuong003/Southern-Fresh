<?php

namespace App\Repositories\Interfaces;

interface ManagerInterface
{
    public function getAll();
    public function findByEmail(string $email);
    public function findById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function find($row, $value);
    public function paginateAll($count);
    public function paginateFill(array $array, int $count);
}
