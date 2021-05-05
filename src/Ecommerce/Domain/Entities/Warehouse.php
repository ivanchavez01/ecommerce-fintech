<?php
namespace Soft\Ecommerce\Domain\Entities;

class Warehouse
{
    protected int $id;
    protected string $name;
    protected Supplier $supplier;
    protected City $city;
}
