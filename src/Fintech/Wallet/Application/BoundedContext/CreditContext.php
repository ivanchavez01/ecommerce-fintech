<?php


namespace Soft\Fintech\Wallet\Application\BoundedContext;


use Carbon\Carbon;
use Soft\Fintech\Wallet\Application\UseCases\CreditRequester;
use Soft\Fintech\Wallet\Domain\Entities\CreditLine;
use Soft\Fintech\Wallet\Domain\Entities\CreditOrder;
use Soft\Fintech\Wallet\Domain\Entities\PhysicalPerson;

class CreditContext
{
    protected function setCreditLine(CreditLine $creditLine)
    {
    }

    /**
     * @return CreditOrder[]
     */
    public function order(): array
    {
        return [];
    }

    public function request(): CreditRequester
    {
        $creditRequester = new CreditRequester(
            new PhysicalPerson(
                "",
                "",
                "",
                "",
                Carbon::now(),
                "",
                "",
            )
        );

        $this->setCreditLine($creditRequester->getLimitLine());

        return $creditRequester;
    }
}
