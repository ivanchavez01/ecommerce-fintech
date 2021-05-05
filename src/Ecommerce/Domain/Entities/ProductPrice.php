<?php
namespace Soft\Ecommerce\Domain\Entities;

class ProductPrice
{
    protected ProductPrice $product;
    protected Supplier $supplier;
    protected float $price;
    protected float $quantity;
    protected array $warehouses = [];
}
