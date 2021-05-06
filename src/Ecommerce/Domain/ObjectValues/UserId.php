<?php


namespace Soft\Ecommerce\Domain\ObjectValues;


class UserId
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
