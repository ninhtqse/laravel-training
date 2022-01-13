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
        return $this->blogRepository->getModel()->paginate(5);
    }

    public function getEdit($id)
    {
        return $this->blogRepository->getModel()->where('id',$id)->first();
    }

    public function edit($blog, $id)
    {
        $item = $this->blogRepository->getModel()->where('id',$id);
        return $item->update($blog);
    }

    public function destroy($id)
    {
        return $this->blogRepository->getModel()->where('id',$id)->delete();
    }
}
