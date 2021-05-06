<?php
namespace Soft\Ecommerce\Infrastructure\Product;

use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;

class ElasticSearchProductRepository implements ProductRepository
{

    public function create(Product $product): Product
    {
        // TODO: Implement create() method.
    }

    public function find($productId): Product
    {
        // TODO: Implement find() method.
    }

    public function search($productId, array $filters): array
    {
        // TODO: Implement search() method.
    }

    public function addStock(int $productId, Warehouse $warehouse, float $stock): Product
    {
        // TODO: Implement addStock() method.
    }
}
