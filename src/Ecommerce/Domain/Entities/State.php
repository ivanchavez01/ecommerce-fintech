<?php
namespace Soft\Ecommerce\Domain\Entities;

class State
{
    protected int $id;
    protected string $name;
    protected Country $country;
}
