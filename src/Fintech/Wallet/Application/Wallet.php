<?php
namespace Soft\Fintech\Wallet\Application;

use Illuminate\Contracts\Auth\Authenticatable;
use Soft\Fintech\Wallet\Application\BoundedContext\WalletOperations;
use Soft\Fintech\Wallet\Application\UseCases\WalletCreator;
use Soft\Fintech\Wallet\Domain\Entities\FiscalPerson;

class Wallet
{
    protected Authenticatable $user;

    public function __construct(Authenticatable $user)
    {
        $this->user = $user;
    }

    public function create(FiscalPerson $physicalPerson): WalletOperations
    {
        $walletCreator = new WalletCreator();
        return new WalletOperations($walletCreator->__invoke());
    }

    public function find()
    {
        return new WalletOperations();
    }
}
