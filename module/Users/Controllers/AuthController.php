<?php

namespace Module\Users\Controllers;

use Module\Users\Requests\CreateUserRequest;
use Module\Users\Requests\LoginRequest;
use Infrastructure\Http\Controller;

class AuthController extends Controller{

    public function login()
    {
        return view('admin.login.login');
    }

    public function postLogin(LoginRequest $request)
    {
        dd($request->all());
    }

    
}