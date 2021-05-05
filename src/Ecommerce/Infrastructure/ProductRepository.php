<?php
namespace Soft\Ecommerce\Infrastructure;

use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;

interface ProductRepository
{
    public function create(Product $product): Product;
    public function find($productId): Product;

    /**
     * @param string $q
     * @param array $filters
     * @return Product[]
     */
    public function search(string $q, array $filters): array;

    public function addStock(int $productId, Warehouse $warehouse, float $stock): Product;
}
