<?php
namespace Soft\Ecommerce\Domain\ObjectValues;

class Shipping
{
    protected float $weight = 0;
    protected float $height = 0;
    protected float $width = 0;

    public function __construct(float $weight, float $height, float $width)
    {
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
    }
}
