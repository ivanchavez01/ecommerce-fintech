<?php


namespace Soft\Fintech\Wallet\Application\UseCases;


use Soft\Fintech\Wallet\Domain\Entities\CreditLine;
use Soft\Fintech\Wallet\Domain\Entities\FiscalPerson;

class CreditRequester
{
    protected FiscalPerson $person;

    public function __construct(FiscalPerson $person)
    {
        $this->person = $person;
    }

    public function getLimitLine(): CreditLine
    {
        $scoreValidator = new ScoreValidator($this->person);
        $riskPlanUseCase = new RiskPlanValidator($scoreValidator);

        return $riskPlanUseCase->__invoke();
    }
}
