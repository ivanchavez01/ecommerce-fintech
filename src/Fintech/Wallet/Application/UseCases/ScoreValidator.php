<?php


namespace Soft\Fintech\Wallet\Application\UseCases;


use Soft\Fintech\Wallet\Domain\Entities\FiscalPerson;

class ScoreValidator
{
    public function __construct(FiscalPerson $person)
    {
    }

    public function getBuroScore(): int
    {
        return 0;
    }
}
