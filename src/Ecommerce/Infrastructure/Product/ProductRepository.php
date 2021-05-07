<?php
namespace Soft\Ecommerce\Infrastructure\Product;

use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;

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
    public function update(ProductId $productId, Product $product): Product;
    public function delete(ProductId $productId): bool;
}
