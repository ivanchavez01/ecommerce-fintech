<?php
namespace Soft\Fintech\Wallet\Domain\Entities;

use Carbon\Carbon;

class PhysicalPerson extends FiscalPerson
{
    protected string $first_name;
    protected string $second_name;
    protected string $middle_name;
    protected string $last_name;
    protected Carbon $birthdate;
    protected string $curp;

    public function __construct(
        string $first_name,
        string $second_name,
        string $middle_name,
        string $last_name,
        Carbon $birthdate,
        string $curp,
        string $rfc
    )
    {
        $this->rfc = $rfc;
        $this->curp = $curp;
        $this->birthdate = $birthdate;
        $this->last_name = $last_name;
        $this->middle_name = $middle_name;
        $this->second_name = $second_name;
        $this->first_name = $first_name;
    }

}
