<?php


namespace Soft\Ecommerce\Infrastructure\Order;


use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\ObjectValues\OrderId;
use Soft\Ecommerce\Domain\Repositories\OrderRepository;

class InMemoryOrderRepository implements OrderRepository
{
    function create(Order $order): Order
    {
        return $order;
    }

    function cancel(Order $order): Order
    {
        return $order;
    }

    public function find(OrderId $orderId): Order
    {
        return new Order(
            $orderId,
            [],
            "service"
        );
    }

    public function payOrder(Order $order): Order
    {
        return $order;
    }
}
