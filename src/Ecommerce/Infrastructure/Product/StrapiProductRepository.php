<?php
namespace Soft\Ecommerce\Infrastructure\Product;

use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\Repositories\ProductRepository;

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

    public function update(ProductId $productId, Product $product): Product
    {
        // TODO: Implement update() method.
    }

    public function delete(ProductId $productId): bool
    {
        // TODO: Implement delete() method.
    }
}
