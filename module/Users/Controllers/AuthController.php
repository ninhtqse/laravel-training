<?php

namespace Module\Users\Controllers;

use Illuminate\Support\Facades\Auth;
use Module\Users\Requests\LoginRequest;
use Infrastructure\Http\Controller;
class AuthController extends Controller{

    public function login()
    {
        // dd(Auth::check());
        return view('admin.login.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $email = $request["login"]['email'];
        $password = $request["login"]['password'];
        if (Auth::attempt(['email'=> $email,'password' => $password, 'is_admin'=>1]) ){
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