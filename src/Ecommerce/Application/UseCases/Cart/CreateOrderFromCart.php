<?php


namespace Soft\Ecommerce\Application\UseCases\Cart;


use Soft\Ecommerce\Application\UseCases\Order\CreateNewOrder;
use Soft\Ecommerce\Domain\Entities\Order;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Domain\Repositories\CartRepository;
use Soft\Ecommerce\Domain\Repositories\OrderRepository;

class CreateOrderFromCart
{
    protected CartRepository $cartRepository;
    protected OrderRepository $orderRepository;

    public function __construct(CartRepository $cartRepository, OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->cartRepository = $cartRepository;
    }

    public function __invoke(UserId $userId): Order
    {
        $cart = $this->cartRepository->findByUserId($userId);
        $orderAdapter = new ShoppingCartToOrderAdapter($cart);
        $createOrderUseCase = new CreateNewOrder($this->orderRepository);

        return $createOrderUseCase($orderAdapter->toOrder());
    }
}
