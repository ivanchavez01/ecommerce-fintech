<?php
namespace Soft\Ecommerce\Application;

use Soft\Ecommerce\Domain\Entities\CartItem;

class Cart
{
    public function __construct()
    {
    }

    /**
     * @var CartItem[]
     */
    protected array $cardItem;

    public function addItem(CartItem $cardItem)
    {

    }
}
