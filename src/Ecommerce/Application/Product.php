<?php

namespace Soft\Ecommerce\Application;

use Soft\Ecommerce\Domain\Entities\Warehouse;
use Soft\Ecommerce\Domain\Entities\Product as ProductEntity;
use Soft\Ecommerce\Domain\Repositories\ProductRepository;

class Product
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }


    public function create(ProductEntity $product): ProductEntity
    {
       return $this->productRepository->create($product);
    }

    public function addStock(int $productId, Warehouse $warehouse, float $stock): ProductEntity
    {
        return $this->productRepository->addStock($productId, $warehouse, $stock);
    }

    /**
     * @return ProductEntity[]
     */
    public function getAll(): array
    {
        return $this->productRepository->search("laptop", []);
    }

    /**
     * @param $productId
     * @return ProductEntity
     */
    public function find($productId): ProductEntity
    {
        return $this->productRepository->find($productId);
    }
}
