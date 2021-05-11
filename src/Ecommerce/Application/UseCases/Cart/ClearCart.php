<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Repositories\CartRepository;

class ClearCart
{
    protected CartRepository $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(Cart $cart): Cart
    {
        return $this->cartRepository->clearCart($cart);
    }
}
