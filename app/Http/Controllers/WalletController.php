<?php


namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Soft\Fintech\Wallet\Application\UseCases\CreditRequester;
use Soft\Fintech\Wallet\Application\Wallet;
use Soft\Fintech\Wallet\Domain\Entities\PhysicalPerson;

class WalletController extends Controller
{
    public function create(Request $request)
    {
        $wallet = new Wallet(Auth::user());

        return $wallet->create(
            new PhysicalPerson(
                $request->post("first_name"),
                $request->post("second_name"),
                $request->post("middle_name"),
                $request->post("last_name"),
                Carbon::createFromFormat("Y-m-d", $request->post("birthdate")),
                $request->post("curp"),
                $request->post("rfc"),
            )
        );
    }

    public function creditRequest()
    {
        return new CreditRequester(
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
    }
}
