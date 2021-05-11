<?php


namespace Soft\Ecommerce\Domain\Repositories;


use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Fintech\Wallet\Domain\Entities\User;

interface UserRepository
{
    function create(User $user): User;
    function find(UserId $userId): User;
}
