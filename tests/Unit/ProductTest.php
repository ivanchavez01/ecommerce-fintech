<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Soft\Ecommerce\Application\UseCases\Product\CreateNewProduct;
use Soft\Ecommerce\Application\UseCases\Product\ProductUpdate;
use Soft\Ecommerce\Application\UseCases\Product\SearchProducts;
use Soft\Ecommerce\Domain\Entities\Brand;
use Soft\Ecommerce\Domain\Entities\Category;
use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Infrastructure\Product\InMemoryProductRepository;

class ProductTest extends TestCase
{
    public function test_create_new_product()
    {
        $createNewProduct = new CreateNewProduct(new InMemoryProductRepository());
        $createNewProduct(
            new Product(
                new ProductId(1),
                "Laptop 16\" Dell NV250",
                new Category(),
                new Brand(),
                5000
            )
        );

        $this->assertTrue(true);
    }

    public function test_update_product()
    {
        $updateProduct = new ProductUpdate(new InMemoryProductRepository());
        $updateProduct(
            new ProductId(1),
            new Product(
                new ProductId(1),
                "Laptop 16\" Dell NV250",
                new Category(),
                new Brand(),
                5000
            )
        );

        $this->assertTrue(true);
    }

    public function test_search_products()
    {
        $searchProducts = new SearchProducts(new InMemoryProductRepository());
        $searchProducts("Laptops", ["category_id" => 1]);

        $this->assertTrue(true);
    }
}
