<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\Repositories\CartRepository;

class AddQuantityToCartItem
{
    protected CartRepository $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(Cart $cart, ProductId $productId, float $quantity): Cart
    {
        $this->cartRepository->addQuantityToCardItem($cart, $productId, $quantity);
        return $cart;
    }
}
