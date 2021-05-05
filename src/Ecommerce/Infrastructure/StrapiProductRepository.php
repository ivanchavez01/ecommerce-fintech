<?php
namespace Soft\Ecommerce\Infrastructure;

use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;

class StrapiProductRepository implements ProductRepository
{
    public function create(Product $product): Product
    {
        // TODO: Implement create() method.
    }

    public function find($productId): Product
    {
        // TODO: Implement find() method.
    }

    public function search(string $q, array $filters): array
    {
        // TODO: Implement search() method.
    }

    public function addStock(int $productId, Warehouse $warehouse, float $stock): Product
    {
        // TODO: Implement addStock() method.
    }
}
