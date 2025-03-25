<?php

namespace App\Services\CMS;

use App\Repositories\CMS\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    //
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        //
        $this->userRepository = $userRepository;
    }

    public function authLogin(array $userDetail)
    {
        $userData = array(
            'email' => $userDetail['email'],
            'password' => $userDetail['password']
        );

        $userValid = $this->userRepository->findByEmail($userData['email']);

        if ($userValid && password_verify($userData['password'], $userValid['password'])) {
            return $userValid;
        }
    }

    public function create($data)
    {
        return $this->userRepository->create($data);
    }
}
