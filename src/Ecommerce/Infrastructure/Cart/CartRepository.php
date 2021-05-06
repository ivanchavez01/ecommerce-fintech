<?php
namespace Soft\Ecommerce\Infrastructure\Cart;

use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\ObjectValues\UserId;

interface CartRepository
{
    public function create(Cart $cart): Cart;
    public function findByUserId(UserId $userId): Cart;
    public function addItem(CartItem $cartItem): Cart;
}
