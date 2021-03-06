<?php
namespace Soft\Ecommerce\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\ProductId;
use Soft\Fintech\Wallet\Domain\Entities\User;
use Soft\SeedWork\Entity;

class Cart extends Entity
{
    protected User $user;
    /** @var \Soft\Ecommerce\Domain\Entities\CartItem[] */
    private array $cartItemIndexByProductId = [];

    public function __construct(User $user, array $cartItems = [])
    {
        $this->fillCartItems($cartItems);
        $this->user = $user;
    }

    public function getCartItem(ProductId $productId): ?CartItem
    {
        if($this->hasProduct($productId)) {
            return $this->cartItemIndexByProductId[$productId->value()];
        }

        return null;
    }

    public function addCartItem(CartItem $cartItem): CartItem
    {
        if($this->hasProduct($cartItem->product()->id())) {
            return $this->addQuantity($cartItem->product()->id(), 1);
        }

        $this->cartItemIndexByProductId[$cartItem->product()->id()->value()] = $cartItem;

        return $cartItem;
    }

    public function addQuantity(ProductId $productId, float $quantity): ?CartItem
    {
        if(isset($this->cartItemIndexByProductId[$productId->value()])) {
            $this->cartItemIndexByProductId[$productId->value()]->addQuantity($quantity);
            return $this->cartItemIndexByProductId[$productId->value()];
        }

        return null;
    }

    private function hasProduct(ProductId $productId): bool
    {
        return isset($this->cartItemIndexByProductId[$productId->value()]);
    }

    public function cartItems(): array
    {
        return array_map(function ($item) {
            return $item;
        }, $this->cartItemIndexByProductId);
    }

    private function fillCartItems($cartItems)
    {
        /** @var \Soft\Ecommerce\Domain\Entities\CartItem $cartItem */
        foreach ($cartItems as $cartItem) {
            $this->cartItemIndexByProductId[$cartItem->product()->id()->value()] = $cartItem;
        }
    }

    public function removeProduct(ProductId $productId): bool
    {
        if(isset($this->cartItemIndexByProductId[$productId->value()])) {
            unset($this->cartItemIndexByProductId[$productId->value()]);
            return true;
        }

        return false;
    }

    public function clear()
    {
        $this->cartItemIndexByProductId = [];
    }
}
