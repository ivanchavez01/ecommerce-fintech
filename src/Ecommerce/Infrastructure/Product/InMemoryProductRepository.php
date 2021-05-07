<?php


namespace Soft\Ecommerce\Infrastructure\Product;


use Soft\Ecommerce\Domain\Entities\Brand;
use Soft\Ecommerce\Domain\Entities\Category;
use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Entities\Warehouse;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;

class InMemoryProductRepository implements ProductRepository
{
    public function create(Product $product): Product
    {
        return $product;
    }

    public function find($productId): Product
    {
        return new Product(
            new ProductId(1),
            "Laptop 16\" Dell NV250",
            new Category(),
            new Brand(),
            5000
        );
    }

    public function search(string $q, array $filters): array
    {
        return [
            new Product(
                new ProductId(1),
                "Laptop 16\" Dell NV250",
                new Category(),
                new Brand(),
                5000
            )
        ];
    }

    public function addStock(int $productId, Warehouse $warehouse, float $stock): Product
    {
        return new Product(
            new ProductId(1),
            "Laptop 16\" Dell NV250",
            new Category(),
            new Brand(),
            5000
        );
    }

    public function update(ProductId $productId, Product $product): Product
    {
        return $product;
    }

    public function delete(ProductId $productId): bool
    {
        return true;
    }
}
