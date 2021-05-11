<?php
namespace Soft\Ecommerce\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\OrderId;

class Order
{
    protected OrderId $id;
    /**
     * @var OrderItem[]
     */
    protected array $orderItem;
    protected Customer $customer;
    protected int $type;
    protected int $paid = 0;
    protected string $status = "opened";

    public function __construct(OrderId $id, array $orderItem, int $type)
    {
        $this->orderItem = $orderItem;
        $this->id = $id;
        $this->type = $type;
    }

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function cancel()
    {
        $this->status = "cancelled";
    }

    public function paid()
    {
        $this->paid = 1;
    }
}
