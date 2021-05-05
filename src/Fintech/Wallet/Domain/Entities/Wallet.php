<?php
namespace Soft\Fintech\Wallet\Domain\Entities;

use Carbon\Carbon;

class Wallet
{
    protected int $id;
    protected float $limit_line;
    protected float $usage_line;
    protected Carbon $last_credit_date;
    protected FiscalPerson $person;

    public function __construct(
        int $id,
        float $limit_line,
        float $usage_line,
        Carbon $last_credit_date,
        FiscalPerson $person
    )
    {
        $this->person = $person;
        $this->last_credit_date = $last_credit_date;
        $this->usage_line = $usage_line;
        $this->limit_line = $limit_line;
        $this->id = $id;
    }

    public function person(): FiscalPerson
    {
        return $this->person;
    }
}
