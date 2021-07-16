<?php

namespace Ecommerce\Domain\Entities;

use Ecommerce\Domain\Entities\WishList;

interface WishListRepository 
{
    public function findById(int $id): WishList;
    public function save(WishList $wishList): void;
    public function delete(int $id): void;
}