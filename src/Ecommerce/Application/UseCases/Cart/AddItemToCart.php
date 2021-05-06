<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Infrastructure\Cart\CartRepository;

class AddItemToCart
{
    protected CartRepository $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(Cart $cart, CartItem $cartItem): Cart
    {
        return $this->cartRepository->addItem($cart, $cartItem);
    }
}
