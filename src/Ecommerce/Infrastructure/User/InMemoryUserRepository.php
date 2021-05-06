<?php


namespace Soft\Ecommerce\Infrastructure\User;


use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Fintech\Wallet\Domain\Entities\User;

class InMemoryUserRepository implements UserRepository
{

    function create(User $user): User
    {
        return $user;
    }

    function find(UserId $userId): User
    {
        return new User(
            $userId,
            "ichavez9001@gmail.com"
        );
    }
}
