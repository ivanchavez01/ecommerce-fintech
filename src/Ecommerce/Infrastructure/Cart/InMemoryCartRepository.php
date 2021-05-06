<?php


namespace Soft\Ecommerce\Infrastructure\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\User\InMemoryUserRepository;

class InMemoryCartRepository implements CartRepository
{
    public function create(Cart $cart): Cart
    {
        return $cart;
    }

    public function addItem(CartItem $cartItem): Cart
    {
        // TODO: Implement addItem() method.
    }

    public function findByUserId(UserId $userId): Cart
    {
        $userRepository = new InMemoryUserRepository();
        $user = $userRepository->find($userId);

        return new Cart($user);
    }
}
