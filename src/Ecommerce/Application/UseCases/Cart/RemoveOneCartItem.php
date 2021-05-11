<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\Repositories\CartRepository;

class RemoveOneCartItem
{
    protected CartRepository $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(Cart $cart, ProductId $productId): Cart
    {
        return $this->cartRepository->removeCartItem($cart, $productId);
    }
}
