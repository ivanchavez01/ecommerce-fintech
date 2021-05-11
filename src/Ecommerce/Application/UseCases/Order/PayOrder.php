<?php


namespace Soft\Ecommerce\Application\UseCases\Order;


use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\ObjectValues\OrderId;
use Soft\Ecommerce\Domain\Repositories\OrderRepository;

class PayOrder
{
    protected OrderRepository $orderRepository;

    public function __construct(OrderRepository  $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function __invoke(OrderId $orderId): Order
    {
        $order = $this->orderRepository->find($orderId);
        $order->paid();
        return $this->orderRepository->payOrder($order);
    }
}
