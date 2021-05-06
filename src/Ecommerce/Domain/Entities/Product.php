<?php
namespace Soft\Ecommerce\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\Shipping;

class Product
{
    protected string $name;
    protected string $image;
    protected Category $category;
    protected Brand $brand;
    protected float $stock = 0;

    protected Shipping $shipping;
    protected ProductId $productId;
    protected float $price;

    public function __construct(ProductId $productId, string $name, Category $category, Brand $brand, float $price)
    {
        $this->price = $price;
        $this->productId = $productId;
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

    public function id(): ProductId
    {
        return $this->productId;
    }
}
