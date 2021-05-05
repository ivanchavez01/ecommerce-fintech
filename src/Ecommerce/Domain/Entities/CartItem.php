<?php
namespace Soft\Ecommerce\Domain\Entities;

class CartItem
{
    protected Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}
