<?php

    namespace Module\Users\Services;

    use Module\Users\Repositories\UserRepository;

    class UserService{

        protected $userRepository;

        public function __construct(UserRepository $userRepository)
        {
            $this->userRepository = $userRepository;
        }

        public function getAll()
        {
            $data = $this->userRepository->getModel()->paginate(5);
            return $data;
        }

        public function create($user)
        {
            dd($user);
            $this->userRepository->create($user);
        }

        public function showEdit($id)
        {
            $data = $this->userRepository->getModel()->where('id',$id)->first();
            // dd($data);
            return $data;
        }

        public function edit($user, $id)
        {
            $item = $this->userRepository->getModel()->where('id',$id);
            $data = $item->update($user);
            return $data;
        }

        public function destroy($id)
        {
            $item = $this->userRepository->getModel()->where('id',$id)->delete();
            return $item;
        }

        public function lockUser($id, $active)
        {
            $item = $this->userRepository->getModel()->where('id',$id);
            $data = $item->update(['active'=>$active]);
            return $data;
        }

    }
