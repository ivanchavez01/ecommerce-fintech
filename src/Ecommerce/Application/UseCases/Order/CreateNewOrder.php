<?php


namespace Soft\Ecommerce\Application\UseCases\Order;


use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\Repositories\OrderRepository;

class CreateNewOrder
{
    protected OrderRepository $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function __invoke(Order $order): Order
    {
        return $this->orderRepository->create($order);
    }
}
