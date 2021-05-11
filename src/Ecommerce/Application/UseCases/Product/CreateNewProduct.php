<?php


namespace Soft\Ecommerce\Application\UseCases\Product;


use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\Repositories\ProductRepository;

class CreateNewProduct
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function __invoke(Product $product): Product
    {
        return $this->productRepository->create($product);
    }
}
