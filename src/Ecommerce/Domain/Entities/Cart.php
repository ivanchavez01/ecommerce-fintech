<?php
namespace Soft\Ecommerce\Domain\Entities;

class Cart
{
    protected int $id;
    /**
     * @var Product[]
     */
    protected array $products;
}
