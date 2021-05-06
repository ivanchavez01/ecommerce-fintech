<?php


namespace Soft\Ecommerce\Domain\ObjectValues;


class ProductId
{
    protected ?int $value;

    public function __construct(?int $value)
    {
        $this->value = $value;
    }

    public function value(): ?int
    {
        return $this->value;
    }
}
