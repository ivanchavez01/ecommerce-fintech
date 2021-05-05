<?php
namespace Soft\Ecommerce\Domain\Entities;

class OrderItem
{
    protected $id;
    protected Product $product;
    protected float $price;
    protected float $quantity;

    public function __construct(int $id, Product $product, float $price, float $quantity)
    {
        $this->quantity = $quantity;
        $this->price = $price;
        $this->product = $product;
        $this->id = $id;
    }
}
