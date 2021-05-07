<?php


namespace Soft\Ecommerce\Application\UseCases\Product;


use Soft\Ecommerce\Infrastructure\Product\ProductRepository;

class SearchProducts
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function __invoke(string $fullText, array $filters): array
    {
        return $this->productRepository->search($fullText, $filters);
    }
}
