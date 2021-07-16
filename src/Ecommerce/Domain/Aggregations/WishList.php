<?php

namespace Soft\Ecommerce\Domain\Aggregations\WishList;

class WishList 
{
    /** @var Soft\Ecommerce\Domain\Entities\Product[] $products */
    private array $products;

    public function add(Product $product)
    {
        $this->products[] = $product;
        // Event::fire(new WishListWasAdded($product));
    }
}