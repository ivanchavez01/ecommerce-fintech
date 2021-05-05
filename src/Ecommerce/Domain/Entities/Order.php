<?php
namespace Soft\Ecommerce\Domain\Entities;

class Order
{
    protected int $id;
    /**
     * @var OrderItem[]
     */
    protected array $orderItem;
    protected Customer $customer;
    protected int $type;

    public function __construct(int $id, array $orderItem, int $type)
    {
        $this->orderItem = $orderItem;
        $this->id = $id;
        $this->type = $type;
    }
}
