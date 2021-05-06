<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Soft\Ecommerce\Application\Services\CartService;
use Soft\Ecommerce\Application\Services\UserService;
use Soft\Ecommerce\Domain\Entities\Brand;
use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\Entities\Category;
use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\User\InMemoryUserRepository;
use Soft\Fintech\Wallet\Domain\Entities\User;

class CartTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_empty_cart()
    {
        $user = (new UserService(new InMemoryUserRepository()))
            ->find(new UserId(2180));

        $cartService = new CartService();
        $cartService->create($user);

        $this->assertTrue(true);
    }

    public function test_add_new_product()
    {
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            )
        );

        $cart->addCartItem(
            new CartItem(
                new Product(
                    new ProductId(1),
                    "Laptop 16\" Dell NV250",
                    new Category(),
                    new Brand(),
                    5000
                ),
                1,
                5000
            )
        );

        $this->assertTrue(true);
    }

    public function test_add_exist_product()
    {
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        new ProductId(1),
                        "Laptop 16\" Dell NV250",
                        new Category(),
                        new Brand(),
                        5000
                    ),
                    1,
                    5000
                )
            ]
        );

        $cartItem = $cart->addCartItem(
            new CartItem(
                new Product(
                    new ProductId(1),
                    "Laptop 16\" Dell NV250",
                    new Category(),
                    new Brand(),
                    5000
                ),
                1,
                5000
            )
        );

        $this->assertTrue($cartItem->quantity() == 2);
    }

    public function test_add_update_quantity_of_product()
    {
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        new ProductId(1),
                        "Laptop 16\" Dell NV250",
                        new Category(),
                        new Brand(),
                        5000
                    ),
                    1,
                    5000
                )
            ]
        );

        $cartItem = $cart->addQuantity(new ProductId(1), 4);
        $this->assertTrue($cartItem->quantity() == 5);
    }

    public function test_remove_product()
    {
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        new ProductId(1),
                        "Laptop 16\" Dell NV250",
                        new Category(),
                        new Brand(),
                        5000
                    ),
                    1,
                    5000
                ),
                new CartItem(
                    new Product(
                        new ProductId(2),
                        "Laptop 16\" Dell NV2502",
                        new Category(),
                        new Brand(),
                        6000
                    ),
                    1,
                    6000
                )
            ]
        );

        $cart->removeProduct(new ProductId(1));

        $this->assertTrue($cart->cartItems() == 1);
    }

    public function test_clear_cart()
    {
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        new ProductId(1),
                        "Laptop 16\" Dell NV250",
                        new Category(),
                        new Brand(),
                        5000
                    ),
                    1,
                    5000
                )
            ]
        );

        $cart->clear();

        $this->assertTrue(count($cart->cartItems()) == 0);
    }
}
