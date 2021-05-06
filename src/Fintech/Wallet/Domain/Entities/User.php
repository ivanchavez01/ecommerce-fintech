<?php
namespace Soft\Fintech\Wallet\Domain\Entities;

use Soft\Ecommerce\Domain\ObjectValues\UserId;

class User
{
    public UserId $id;
    public string $email;
    public string $account_confirmed_at;
    public bool $active = false;

    public function __construct(
        UserId $id,
        string $email
    )
    {
        $this->email = $email;
        $this->id = $id;
    }

    public function activation_account() {
        $this->active = 1;
        $this->account_confirmed_at = date("Ymd");
    }
}
