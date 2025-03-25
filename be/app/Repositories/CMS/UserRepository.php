<?php

namespace App\Repositories\CMS;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        //
        return $this->user->all();
    }

    public function findById(int $id)
    {
        //0000
        return $this->user->find($id);
    }

    public function findByEmail(string $email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function create(array $data)
    {
        //
        return $this->user->create($data);
    }

    public function update(int $id, array $data)
    {
        //
        // $user = $this->findById($id);
        // if ($user) {
        //     $user->update($data);
        //     return $user;
        // }
        // return null;
    }

    public function delete(int $id)
    {
        //
        // $user = $this->findById($id);
        // if ($user) {
        //     $user->delete();
        //     return true;
        // }
        // return false;
    }
}
