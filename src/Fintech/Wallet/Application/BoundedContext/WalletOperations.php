<?php
namespace Soft\Fintech\Wallet\Application\BoundedContext;

use Carbon\Carbon;
use Soft\Fintech\Wallet\Application\UseCases\CreditRequester;
use Soft\Fintech\Wallet\Application\UseCases\RiskPlanValidator;
use Soft\Fintech\Wallet\Application\UseCases\ScoreValidator;
use Soft\Fintech\Wallet\Domain\Entities\CreditLine;
use Soft\Fintech\Wallet\Domain\Entities\CreditOrder;
use Soft\Fintech\Wallet\Domain\Entities\PhysicalPerson;
use Soft\Fintech\Wallet\Domain\Entities\Wallet;

class WalletOperations
{
    protected Wallet $wallet;

    public function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    public function operations()
    {

    }

    public function credit(): CreditContext
    {
        return new CreditContext();
    }
}
