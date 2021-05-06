<?php


namespace Soft\Ecommerce\Infrastructure\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\User\InMemoryUserRepository;

class InMemoryCartRepository implements CartRepository
{
    public function create(Cart $cart): Cart
    {
        return $cart;
    }

    public function addItem(Cart $cart, CartItem $cartItem): Cart
    {
         $cart->addCartItem($cartItem);
         return $cart;
    }

    public function findByUserId(UserId $userId): Cart
    {
        $userRepository = new InMemoryUserRepository();
        $user = $userRepository->find($userId);

        return new Cart($user);
    }

    public function addQuantityToCardItem(Cart $cart, ProductId $productId, float $quantity): Cart
    {
        $cart->addQuantity($productId, $quantity);
        return $cart;
    }

    public function removeCartItem(Cart $cart, ProductId $productId): Cart
    {
        $cart->removeProduct($productId);
        return $cart;
    }

    public function clearCart(Cart $cart): Cart
    {
        $cart->clear();
        return $cart;
    }
}
