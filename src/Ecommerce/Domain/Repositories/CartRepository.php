<?php
namespace Soft\Ecommerce\Domain\Repositories;

use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\UserId;

interface CartRepository
{
    public function create(Cart $cart): Cart;
    public function findByUserId(UserId $userId): Cart;
    public function addItem(Cart $cart, CartItem $cartItem): Cart;
    public function addQuantityToCardItem(Cart $cart, ProductId $productId, float $quantity);
    public function removeCartItem(Cart $cart, ProductId $productId): Cart;
    public function clearCart(Cart $cart): Cart;
}
