<?php

namespace Module\Auths\Controllers;

use Illuminate\Support\Facades\Auth;
use Module\Auths\Requests\LoginRequest;
use Infrastructure\Http\Controller;

class AuthController extends Controller{

    public function getLogin()
    {
        return view('admin.login.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request['login']['email'],
            'password' => $request['login']['password'],
            'is_admin' => 1,
        ];
        if(Auth::attempt($credentials)) {
            return redirect()->route('admin');
        }else{
            session()->flash('LoginFail', true);
            return redirect()->route('login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
