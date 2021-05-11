<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\ObjectValues\OrderId;

class ShoppingCartToOrderAdapter
{
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function toOrder(): Order
    {
        return new Order(
            new OrderId(1),
            [],
            1
        );
    }
}
