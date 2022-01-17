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

        public function getDashBoard()
        {
            return view('admin.dashboard.dashboard');
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
    }
