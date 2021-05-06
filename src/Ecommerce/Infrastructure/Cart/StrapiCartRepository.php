<?php
namespace Soft\Ecommerce\Infrastructure\Cart;

use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;

class StrapiCartRepository implements CartRepository
{
    public function create(Cart $cart): Cart
    {
        // TODO: Implement create() method.
    }

    public function addItem(CartItem $cartItem): Cart
    {
        // TODO: Implement addItem() method.
    }
}
