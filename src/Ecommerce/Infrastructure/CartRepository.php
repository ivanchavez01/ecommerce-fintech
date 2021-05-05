<?php
namespace Soft\Ecommerce\Infrastructure;

use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;

interface CartRepository
{
    public function create(Cart $cart): Cart;
    public function addItem(CartItem $cartItem): Cart;
}
