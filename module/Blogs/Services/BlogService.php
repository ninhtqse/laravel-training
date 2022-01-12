<?php

    namespace Module\Blogs\Services;

    use Module\Blogs\Repositories\BlogRepository;

    class BlogService
    {
        protected $blogRepository;

        public function __construct(BlogRepository $blogRepository)
        {
            $this->blogRepository = $blogRepository;
        }

        public function create($blog)
        {
            $this->blogRepository->create($blog);
        }

        public function getAll()
        {
            $data = $this->blogRepository->getModel()->paginate(5);
            // $data = $this->userRepository->get();
            return $data;
        }

        public function showEdit($id)
        {
            $data = $this->blogRepository->getModel()->where('id',$id)->first();
            // dd($data);
            return $data;
        }

        public function edit($blog, $id)
        {
            $item = $this->blogRepository->getModel()->where('id',$id);
            $data = $item->update($blog);
            return $data;
        }

        public function destroy($id)
        {
            $item = $this->blogRepository->getModel()->where('id',$id)->delete();
            return $item;
        }
    }
