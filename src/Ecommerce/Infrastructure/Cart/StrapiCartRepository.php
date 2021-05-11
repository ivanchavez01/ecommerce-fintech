<?php
namespace Soft\Ecommerce\Infrastructure\Cart;

use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Domain\Repositories\CartRepository;

class StrapiCartRepository implements CartRepository
{
    public function create(Cart $cart): Cart
    {
        // TODO: Implement create() method.
    }

    public function findByUserId(UserId $userId): Cart
    {
        // TODO: Implement findByUserId() method.
    }

    public function addQuantityToCardItem(Cart $cart, ProductId $productId, float $quantity)
    {
        // TODO: Implement addQuantityToCardItem() method.
    }

    public function removeCartItem(Cart $cart, ProductId $productId): Cart
    {
        // TODO: Implement removeCartItem() method.
    }

    public function clearCart(Cart $cart): Cart
    {
        // TODO: Implement clearCart() method.
    }

    public function addItem(Cart $cart, CartItem $cartItem): Cart
    {
        // TODO: Implement addItem() method.
    }
}
