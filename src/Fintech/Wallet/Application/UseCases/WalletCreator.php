<?php


namespace Soft\Fintech\Wallet\Application\UseCases;


use Soft\Fintech\Wallet\Domain\Entities\Wallet;

class WalletCreator
{
    public function __invoke(): Wallet
    {
        return new Wallet();
    }
}
