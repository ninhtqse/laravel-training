<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;
use Module\Clients\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function forgotPassword()
    {
        return view('client.login.forgotpassword');
    }

    public function sendMailForgotPassword(Request $request)
    {
        $email = $request->email;
        $this->authService->sendMailForgotPassword($email);
    }

    public function getResetPass(Request $request)
    {
        $token = $request->token;
        return view('client.login.ressetPass', compact('token'));
    }

    public function doForgotPassword(Request $request)
    {
        $token = $request->token;
        $password = $request->password;
        // dd($password);
        $this->authService->doForgotPassword($token, $password);
        return redirect()->route('get_login_web');
    }
}