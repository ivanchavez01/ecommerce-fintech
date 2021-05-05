<?php
namespace Soft\Ecommerce\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\Shipping;

class Product
{
    protected int $id;
    protected string $name;
    protected string $image;
    protected Category $category;
    protected Brand $brand;
    protected float $quantity;

    protected Shipping $shipping;

    public function __construct(string $name, Category $category, Brand $brand, float $quantity)
    {
        $this->quantity = $quantity;
        $this->brand = $brand;
        $this->category = $category;
        $this->name = $name;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setShipping(Shipping $shipping)
    {
        $this->shipping = $shipping;
    }
}
