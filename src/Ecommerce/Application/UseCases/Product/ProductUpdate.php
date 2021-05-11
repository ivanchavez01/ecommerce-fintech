<?php


namespace Soft\Ecommerce\Application\UseCases\Product;


use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\Repositories\ProductRepository;

class ProductUpdate
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function __invoke(ProductId $productId, Product $product): Product
    {
        return $this->productRepository->update($productId, $product);
    }
}
