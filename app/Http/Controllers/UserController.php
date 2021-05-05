<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Soft\Fintech\Wallet\Application\Wallet;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "password_confirmed" => "required|confirm:password"
        ]);

        return User::create($request->only(["email", "password", "name"]));
    }
}
