<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Repositories\CartRepository;
use Soft\Ecommerce\Domain\Repositories\UserRepository;
use Soft\Fintech\Wallet\Domain\Entities\User;

class CreateNewCartForUser
{
    protected CartRepository $cartRepository;
    protected UserRepository $userRepository;

    public function __construct(CartRepository $cartRepository, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(User $user): Cart
    {
        $cart = new Cart($user);
        return $this->cartRepository->create($cart);
    }
}
