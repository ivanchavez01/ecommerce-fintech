<?php


namespace Soft\Fintech\Wallet\Application\UseCases;


use Soft\Fintech\Wallet\Domain\Entities\CreditLine;

class RiskPlanValidator
{
    protected ScoreValidator $scoreValidator;

    public function __construct(ScoreValidator $scoreValidator)
    {
        $this->scoreValidator = $scoreValidator;
    }

    public function __invoke(): CreditLine
    {
       $score = $this->scoreValidator->getBuroScore();

       return new CreditLine();
    }
}
