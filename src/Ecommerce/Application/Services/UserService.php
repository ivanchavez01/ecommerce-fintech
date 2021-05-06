<?php


namespace Soft\Ecommerce\Application\Services;


use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\User\UserRepository;
use Soft\Fintech\Wallet\Domain\Entities\User;

class UserService
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(User $user)
    {
        $this->userRepository->create($user);
    }

    public function find(UserId $userId)
    {
        return $this->userRepository->find($userId);
    }
}
