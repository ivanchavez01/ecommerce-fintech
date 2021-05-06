<?php
namespace Soft\Ecommerce\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\ProductId;

class CartItem
{
    protected Product $product;
    protected float $quantity;
    protected float $price;

    public function __construct(Product $product, float $quantity, float $price)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public function product(): Product
    {
        return $this->product;
    }

    public function addQuantity(float $quantity)
    {
        $this->quantity += $quantity;
    }

    public function quantity(): float
    {
        return $this->quantity;
    }
}
