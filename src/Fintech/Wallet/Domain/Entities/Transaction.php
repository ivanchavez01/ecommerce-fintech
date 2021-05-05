<?php
namespace Soft\Fintech\Wallet\Domain\Entities;

class Transaction
{
    protected $id;
    protected $amount;
    protected $bankAccountSource; // normally stp account
    protected $bankAccountOrigin;
    protected $method;
}
