<?php


class WalletTest
{
    public function test_create_new_wallet()
    {
        Wallet::create(new PhysicalPerson(new Applicant()));
    }
}
