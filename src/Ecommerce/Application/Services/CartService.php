<?php


namespace Soft\Ecommerce\Application\Services;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\Cart\CartRepository;
use Soft\Ecommerce\Infrastructure\Cart\InMemoryCartRepository;
use Soft\Fintech\Wallet\Domain\Entities\User;
use \Soft\Ecommerce\Domain\Entities\Cart as CartEntity;

class CartService
{
    protected CartRepository $cartRepository;

    /** access via construct named */
    public function __construct()
    {
        $this->cartRepository = new InMemoryCartRepository();
    }

    public function create(User $user): CartEntity
    {
        return $this->cartRepository->create(new Cart($user));
    }

    public function find(UserId $userId): CartEntity
    {
        return $this->cartRepository->findByUserId($userId);
    }
}
