<?php

namespace Module\Users\Controllers;

use Illuminate\Http\Request;
use Module\Users\Requests\CreateUserRequest;
use Module\Users\Requests\LoginRequest;
use Module\Users\Services\UserService;
use Infrastructure\Http\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        $results = $this->userService->getAll();
        return view('admin.users.index', compact('results'));

    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function createUser(CreateUserRequest $request)
    {
        $user= $request->users;
        $result = $this->userService->create($user);
        return redirect()->route('admin');
    }

    public function showEdit($id)
    {
        $results = $this->userService->showEdit($id);
        return view('admin.users.edit', compact('results'));

    }

    public function edit(Request $request, $id)
    {
        $user= $request->users;
        $this->userService->edit($user, $id);
        return redirect()->route('admin');
    }

    public function delete($id)
    {
        $this->userService->destroy($id);
        return redirect()->route('admin');
    }

    public function lockUser($id, $active)
    {
        $this->userService->lockUser($id, $active);
        return redirect()->route('admin');
    }

    public function getDashboard()
    {
        return view('admin.users.dashboard');
    }

    public function getRegister()
    {
        return view('client.login.register');
    }

    public function register(CreateUserRequest $request)
    {
        // dd(1);
        $user= $request->users;
        if(isset($user['is_admin'])){
            unset($user['is_admin']);
        }
        $user['is_admin'] = 0;
        $this->userService->create($user);
        return redirect()->route('login_web');
    }

    public function login(LoginRequest $request)
    {
        $email = $request["login"]['email'];
        $password = $request["login"]['password'];
        if (Auth::attempt(['email'=> $email,'password' => $password]) ){
            return redirect()->route('home_client');
        }else{
            session()->flash('LoginFail', true);
            return redirect()->route('login_web');
        }
    }

    public function getLogin()
    {
        return view('client.login.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login_web');
      }
    
}