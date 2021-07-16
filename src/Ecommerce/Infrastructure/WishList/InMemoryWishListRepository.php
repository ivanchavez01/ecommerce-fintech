<?php

namespace Ecommerce\Infrastructure\WishList;

use Eccomerce\Domain\Entities\WishListRepository;

class InMemoryWishListRepository implements WishListRepository 
{
    public function findById(int $id): WishList
    {
        return new WishList();
    }
    
    public function save(WishList $wishList): void
    {
    
    }
    
    public function delete(int $id): void
    {

    }
}