<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Soft\Fintech\Wallet\Application\Wallet;
use Soft\Fintech\Wallet\Domain\Entities\CreditLine;


class CreditRequestController extends Controller
{
    public function requestCredit(Request $request): CreditLine
    {
        $wallet = new Wallet(Auth::user());
        $wallet->find();
    }
}
