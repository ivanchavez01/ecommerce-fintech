<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Soft\Ecommerce\Application\Services\CartService;
use Soft\Ecommerce\Application\Services\UserService;
use Soft\Ecommerce\Application\UseCases\Cart\AddItemToCart;
use Soft\Ecommerce\Application\UseCases\Cart\AddQuantityToCartItem;
use Soft\Ecommerce\Application\UseCases\Cart\ClearCart;
use Soft\Ecommerce\Application\UseCases\Cart\CreateNewCartForUser;
use Soft\Ecommerce\Application\UseCases\Cart\RemoveOneCartItem;
use Soft\Ecommerce\Domain\Entities\Brand;
use Soft\Ecommerce\Domain\Entities\Cart;
use Soft\Ecommerce\Domain\Entities\CartItem;
use Soft\Ecommerce\Domain\Entities\Category;
use Soft\Ecommerce\Domain\Entities\Product;
use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Ecommerce\Domain\ObjectValues\UserId;
use Soft\Ecommerce\Infrastructure\Cart\InMemoryCartRepository;
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
        $createNewCartUseCase = new CreateNewCartForUser(
            new InMemoryCartRepository(),
            new InMemoryUserRepository()
        );

        $cart = $createNewCartUseCase(
            new User(
                new UserId(2180),
                'ichavez9001@gmail.com'
            )
        );

        $this->assertTrue($cart instanceof Cart);
    }

    public function test_add_new_product()
    {
        $addNewItemToCart = new AddItemToCart(new InMemoryCartRepository());

        $addNewItemToCart(
            new Cart(
                new User(
                    new UserId(2180),
                    "ichavez9001@gmaiil.com"
                )
            ),
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
        $addNewItemToCart = new AddItemToCart(new InMemoryCartRepository());
        $productId = new ProductId(1);
        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        $productId,
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

        $cartUpdated = $addNewItemToCart(
            $cart,
            new CartItem(
                new Product(
                    $productId,
                    "Laptop 16\" Dell NV250",
                    new Category(),
                    new Brand(),
                    5000
                ),
                1,
                5000
            )
        );

        $this->assertTrue($cartUpdated->getCartItem($productId)->quantity() == 2);
    }

    public function test_add_update_quantity_of_product()
    {
        $productId = new ProductId(1);

        $cart = new Cart(
            new User(
                new UserId(2180),
                "ichavez9001@gmaiil.com"
            ),
            [
                new CartItem(
                    new Product(
                        $productId,
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

        $addQuantityToCartItem = new AddQuantityToCartItem(new InMemoryCartRepository());
        $cart = $addQuantityToCartItem($cart, $productId, 4);

        $this->assertTrue($cart->getCartItem($productId)->quantity() == 5);
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

        $removeOnCartItem = new RemoveOneCartItem(new InMemoryCartRepository());
        $cart = $removeOnCartItem($cart, new ProductId(1));

        $this->assertTrue(count($cart->cartItems()) == 1);
    }

    public function test_clear_cart()
    {
        $clearCart = new ClearCart(new InMemoryCartRepository());

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

        $cart = $clearCart($cart);

        $cart->clear();

        $this->assertTrue(count($cart->cartItems()) == 0);
    }
}
