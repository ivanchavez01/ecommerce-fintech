<?php


namespace Soft\Ecommerce\Domain\Repositories;


use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\ObjectValues\OrderId;

interface OrderRepository
{
    function create(Order $order): Order;
    function cancel(Order $order): Order;
    public function find(OrderId $orderId): Order;
    public function payOrder(Order $order);
}
