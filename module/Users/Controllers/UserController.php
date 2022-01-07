<?php

namespace Module\Users\Controllers;

use Illuminate\Http\Request;
use Module\Users\Requests\CreateUserRequest;
use Module\Users\Services\UserService;
use Infrastructure\Http\Controller;

class UserController extends Controller{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        $results = $this->userService->getAll();
        // dd($result);
        // return view('admin.users.index');
        return view('admin.users.index', compact('results'));

    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function createUser(CreateUserRequest $request)
    {
        // dd(1);
        $user= $request->users;
        $result = $this->userService->create($user);
        // dd($result);
        return redirect()->route('admin');
    }

    public function showEdit($id)
    {
        // dd(1);
        // $id = $request->id;
        $results = $this->userService->showEdit($id);
        // dd($results->id);
        return view('admin.users.edit', compact('results'));
        // return view('admin.users.edit');

    }

    public function edit(Request $request, $id)
    {
        // dd(1);
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

    
}